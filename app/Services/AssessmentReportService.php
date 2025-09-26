<?php
namespace App\Services;

use App\Models\AssessmentModel;
use App\Models\CouponModel;
use App\Models\UserMetaModel;
use App\Models\CouponTrackingModel;
use App\Models\AssessmentRelationshipModel;
use App\Services\Api\SelfAssessmentResultsService;
use App\Services\Api\SelfAssessmentResponsesService;
use App\Services\Api\SelfAssessmentChoicesService;
use App\Services\Api\SelfAssessmentPatternsService;
use App\Services\Api\NeedsAssessmentResponsesService;
use App\Services\Api\NeedsAssessmentChoicesService;
use App\Core\Mail\Mail;
use App\Core\Logger;
use App\Core\Config;
use Carbon\Carbon;

use Spipu\Html2Pdf\Html2Pdf;

class AssessmentReportService
{
    protected $selfAssessmentResultsService;
    protected $selfAssessmentResponsesService;
    protected $selfAssessmentChoicesService;
    protected $selfAssessmentPatternsService;
    protected $needsAssessmentResponsesService;
    protected $needsAssessmentChoicesService;

    public function __construct(){
        $this->selfAssessmentResultsService = new SelfAssessmentResultsService();
        $this->selfAssessmentResponsesService = new SelfAssessmentResponsesService();
        $this->selfAssessmentChoicesService = new SelfAssessmentChoicesService();
        $this->selfAssessmentPatternsService = new SelfAssessmentPatternsService();
        $this->needsAssessmentResponsesService = new NeedsAssessmentResponsesService();
        $this->needsAssessmentChoicesService = new NeedsAssessmentChoicesService();
    }

    public function generateReport($assessments){
        $chartImageMissingAssessments = [];
        foreach($assessments as $assessment){
            $participantName = get_assessment_participant_name($assessment);
            $participantFirstName = get_assessment_participant_name($assessment, 'first');
           
            $personalReportName = $assessment->assessment_id."-".trim(str_replace(" ", "-", $participantName)).'-'. date("m-d-Y", strtotime($assessment->created_at)).".pdf";

            $personalFilePath = PROJECT_ROOT.'/assessments/pdf/'.$personalReportName;

            if($assessment->pdf_status == 1 && file_exists($personalFilePath))
                continue;

            
            // Validate if PDF file already created or not
            if(file_exists($personalFilePath)){
                Logger::info('Assessment Report already exists for '.$assessment->assessment_id);
                $assessment->pdf_status = 1;   
                $assessment->save();
                continue;
            }

            if(get_assessment_chart_image($assessment->assessment_id) && get_assessment_chart_image($assessment->assessment_id, 'single')){
                Logger::info('Generating Assessment Report for '.$assessment->assessment_id);
                $assessmentRelationship = AssessmentRelationshipModel::where(['assessment_id' => $assessment->assessment_id])->first();
                $lang = !empty($assessmentRelationship) ? $assessmentRelationship->lang : 'en';
                
                $assessmentResults = $this->selfAssessmentResultsService->getById($assessment->assessment_result_id);
                if($lang != 'en'){
                    // Get English patterns (base set to map IDs)
                    $englishPatterns = $this->selfAssessmentPatternsService->list([
                        'graderId' => $assessmentResults->graderId,
                        'lang'     => 'en'
                    ]);

                    // Build title → ID map
                    $patternMap = [];
                    foreach ($englishPatterns->data as $pattern) {
                        $patternMap[trimAndLowerString($pattern->title)] = $pattern->id;
                    }

                    // Collect all titles we need translations for
                    $titlesToTranslate = [
                        $assessmentResults->details->preferencePatternTitle ?? '',
                        $assessmentResults->details->socialPatternTitle ?? '',
                        $assessmentResults->details->historicalPatternTitle ?? '',
                    ];

                    if (!empty($assessmentResults->overrides[0]->details->patternTitle)) {
                        $titlesToTranslate[] = $assessmentResults->overrides[0]->details->patternTitle;
                    }

                    // Extract IDs
                    $requiredIds = [];
                    foreach ($titlesToTranslate as $title) {
                        $titleKey = trimAndLowerString($title);
                        if (isset($patternMap[$titleKey])) {
                            $requiredIds[] = $patternMap[$titleKey];
                        }
                    }

                    // Only fetch translated patterns if lang ≠ en
                    $translatedPatterns = [];
                    if ($lang !== 'en' && !empty($requiredIds)) {
                        $translatedPatterns = $this->selfAssessmentPatternsService->list([
                            'graderId' => $assessmentResults->graderId,
                            'id[$in]'  => $requiredIds,
                            'lang'     => $lang
                        ]);
                    }

                    if(empty($translatedPatterns)){
                        Logger::error("translatedPatterns is empty for assessment_id: ".$assessment->assessment_id);
                        continue;
                    }

                    // Build ID → translated title map
                    $translatedMap = [];
                    foreach ($translatedPatterns->data as $tp) {
                        $translatedMap[$tp->id] = $tp->title;
                    }

                    // Replace values in results
                    foreach ($titlesToTranslate as $title) {
                        $titleKey = trimAndLowerString($title);
                        if (isset($patternMap[$titleKey])) {
                            $id = $patternMap[$titleKey];
                            if (isset($translatedMap[$id])) {
                                if ($titleKey === trimAndLowerString($assessmentResults->details->preferencePatternTitle)) {
                                    $assessmentResults->details->preferencePatternTitle = $translatedMap[$id];
                                }
                                if ($titleKey === trimAndLowerString($assessmentResults->details->socialPatternTitle)) {
                                    $assessmentResults->details->socialPatternTitle = $translatedMap[$id];
                                }
                                if ($titleKey === trimAndLowerString($assessmentResults->details->historicalPatternTitle)) {
                                    $assessmentResults->details->historicalPatternTitle = $translatedMap[$id];
                                }
                                if (!empty($assessmentResults->overrides[0]->details->patternTitle) &&
                                    $titleKey === trimAndLowerString($assessmentResults->overrides[0]->details->patternTitle)) {
                                    $assessmentResults->overrides[0]->details->patternTitle = $translatedMap[$id];
                                }
                            }
                        }
                    }
                }

                $selfChoicesResponse = $this->selfAssessmentResponsesService->list(['participantSessionId' => $assessment->session_id]);
                if(!isset($selfChoicesResponse->data) || empty($selfChoicesResponse->data)){
                    continue;
                }

                $dMostChoices = $iMostChoices = $sMostChoices = $cMostChoices = array();
                $dLeastChoices = $iLeastChoices = $sLeastChoices = $cLeastChoices = array();

                $queryParams = [];
                foreach($selfChoicesResponse->data as $index=>$choicedata){
                    $queryParams[] = 'questionId[$in]='.$choicedata->questionId;
                }
                
                if(empty($queryParams)){
                    continue;
                }

                $queryParams[] = '$limit=10000000';
                $queryParams[] = 'lang='.$lang;
                $selfAssessmentChoices = $this->selfAssessmentChoicesService->listByQueryParams( $queryParams );
                if(!isset($selfAssessmentChoices->data) || empty($selfAssessmentChoices->data)){
                    continue;
                }
                
                foreach($selfChoicesResponse->data as $index=>$choicedata){
                    // pr($choicedata); die;
                    $MostarrayKey = array_search($choicedata->mostChoiceId, array_column($selfAssessmentChoices->data, "id") );
                    $LeastarrayKey = array_search($choicedata->leastChoiceId, array_column($selfAssessmentChoices->data, "id") );
                    
                    if($MostarrayKey!== false){
                        if(strtolower($selfAssessmentChoices->data[$MostarrayKey]->temperament) == "choleric"){
                            $dMostChoices[] = $selfAssessmentChoices->data[$MostarrayKey];
                        }else if(strtolower($selfAssessmentChoices->data[$MostarrayKey]->temperament) == "sanguine"){
                            $iMostChoices[] = $selfAssessmentChoices->data[$MostarrayKey];
                        }else if(strtolower($selfAssessmentChoices->data[$MostarrayKey]->temperament) == "phlegmatic"){
                            $sMostChoices[] = $selfAssessmentChoices->data[$MostarrayKey];						
                        }else if(strtolower($selfAssessmentChoices->data[$MostarrayKey]->temperament) == "melancholy"){
                            $cMostChoices[] = $selfAssessmentChoices->data[$MostarrayKey];
                        }
                    }
                    if($LeastarrayKey!== false){
                        if(strtolower($selfAssessmentChoices->data[$LeastarrayKey]->temperament) == "choleric"){
                            $dLeastChoices[] = $selfAssessmentChoices->data[$LeastarrayKey];
                        }else if(strtolower($selfAssessmentChoices->data[$LeastarrayKey]->temperament) == "sanguine"){
                            $iLeastChoices[] = $selfAssessmentChoices->data[$LeastarrayKey];
                        }else if(strtolower($selfAssessmentChoices->data[$LeastarrayKey]->temperament) == "phlegmatic"){
                            $sLeastChoices[] = $selfAssessmentChoices->data[$LeastarrayKey];
                        }else if(strtolower($selfAssessmentChoices->data[$LeastarrayKey]->temperament) == "melancholy"){
                            $cLeastChoices[] = $selfAssessmentChoices->data[$LeastarrayKey];
                        }
                    }
                }

                $needsAssessmentChoices = $this->fetchNeedsAssessmentChoices($assessment, $lang);
                if(empty($needsAssessmentChoices))
                    continue;

                $promotionalCoupon = null;
                $isPromotional = get_settings_option('affcp_settings.is_promotional');
                if($isPromotional == true){
                    $promotionCouponCode = get_settings_option('affcp_settings.promotional_code');
                    if(!empty($promotionCouponCode)){
                        $promotionalCoupon = CouponModel::where(['coupon_code' => $promotionCouponCode])->first();
                    }
                }
                
                
                
                // pr($needsAssessmentChoices); die;
                // Render the template with PHP variables
                ob_start();
                include PROJECT_ROOT . "/api/resources/views/template-report-{$lang}.php";
                $personalReportHtml = ob_get_clean();

                $this->createPDFReportFile($personalFilePath, $personalReportHtml, ['layout' => array(215,307), 'spacing' => array(0,0,0,0)]);
                
                $holdReport = false;
                // Valdiate If Manager Report Required
                $assessmentCoupon = CouponTrackingModel::where(['assessment_id' => $assessment->assessment_id, 'usage_status' => 'completed'])->orderBy('id', 'ASC')->first();
                // Logger::info("Assessment Coupons ", (array) $assessmentCoupon);
                if(!empty($assessmentCoupon)){
                    $coupon = CouponModel::with('user','affiliate','company')->find($assessmentCoupon->coupon_id);
                    if(!empty($coupon)){                        
                        $holdReport = $coupon->hold_report ??0;
                        $managerReportName = $managerFilePath = '';
                        if($coupon->manager_report == 1){
                            Logger::info("Genrating Assessment Manager Report ");
                            $managerReportName = $assessment->assessment_id."-".trim(str_replace(" ", "-", $participantName)).'-'. date("m-d-Y", strtotime($assessment->created_at))."-Manager-Report.pdf";
                            $managerFilePath = PROJECT_ROOT.'/assessments/pdf/'.$managerReportName;
                            if(!file_exists($managerFilePath)){
                                if($lang != "en"){
                                    $assessmentResults = $this->selfAssessmentResultsService->getById($assessment->assessment_result_id);
                                    $needsAssessmentChoices = $this->fetchNeedsAssessmentChoices($assessment, 'en');                                    
                                }
                                // Render the template with PHP variables
                                ob_start();
                                include PROJECT_ROOT . '/api/resources/views/template-manager-report.php';
                                $managerReportHtml = ob_get_clean();

                                $this->createPDFReportFile($managerFilePath, $managerReportHtml, ['layout' => 'A4', 'spacing' => array(10, 5, 10, 5)]);

                                $managerEmails = CouponManagerModel::with('user')->where('coupon_id', $coupon->coupon_id)->get()->pluck('user.user_email')->toArray();
                                if(!empty($managerEmails)){
                                    $sendTo = Config::get('app.env') == "local" ? Config::get('app.email') : implode(",",$managerEmails);
                                    if(!empty($sendTo)){
                                        Mail::send($sendTo, 'New Assessment Profile', 'manager-assessment-notification', ['assessment' => $assessment, 'coupon' => $coupon, 'personalFilePath' => $personalFilePath, 'personalReportName' => $personalReportName , 'managerFilePath' => $managerFilePath, 'managerReportName' => $managerReportName, "participantName" => $participantName]);
                                    }            
                                }
                            }
                        }

                        $sendTo = Config::get('app.env') == "local" ? Config::get('app.email') : $coupon->user->user_email;
                        if(!empty($sendTo)){
                            Mail::send($sendTo, 'New Assessment Profile', 'affiliate-company-assessment-notification', ['assessment' => $assessment, 'coupon' => $coupon, 'personalFilePath' => $personalFilePath, 'personalReportName' => $personalReportName , 'managerFilePath' => $managerFilePath, 'managerReportName' => $managerReportName, "participantName" => $participantName]);
                        }

                        if(!empty($coupon->other_recipients)){
                            $sendTo = Config::get('app.env') == "local" ? Config::get('app.email') : $coupon->other_recipients;
                            if(!empty($sendTo)){
                                Mail::send($sendTo, 'New Assessment Profile', 'assessment-notification-recipients', ['assessment' => $assessment, 'personalFilePath' => $personalFilePath, 'personalReportName' => $personalReportName, "participantName" => $participantName]);
                            }   
                        }
                    }
                }

                if($holdReport == false){
                    $sendTo = Config::get('app.env') == "local" ? Config::get('app.email') : $assessment->user->user_email;
                    if(!empty($sendTo)){
                        Mail::send($sendTo, 'Your MyTemperament Assessment Profile', 'participant-assessment-notification', ['assessment' => $assessment, 'personalFilePath' => $personalFilePath, 'personalReportName' => $personalReportName, "participantName" => $participantName]);
                    }
                }

                if($assessment->payment->end_price > 0){
                    $sendTo = Config::get('app.env') == "local" ? Config::get('app.email') : $assessment->user->user_email;
                    if(!empty($sendTo)){
                        $assessmentCoupons = CouponTrackingModel::where(['assessment_id' => $assessment->assessment_id, 'usage_status' => 'completed'])->orderBy('id', 'ASC')->get();
                        Mail::send($sendTo, 'Thank you for your payment', 'assessment-payment-notification', ['assessment' => $assessment, 'personalFilePath' => $personalFilePath, 'personalReportName' => $personalReportName, 'assessmentCoupons' => $assessmentCoupons, 'promotionalCoupon' => $promotionalCoupon, "participantName" => $participantName]);
                    }
                }

                // Mark as generated
                $assessment->pdf_status = 1;
                $assessment->save();
            }else{
                // TODO: 
                $chartImageMissingAssessments[] = $assessment;
            }
        }

        if(!empty($chartImageMissingAssessments) && (date("i", strtotime("+2 minutes ".$modifiedAt)) == '00') ){
            $sendTo = Config::get('app.env') == "local" ? Config::get('app.email') : get_settings_option('admin_email');
            if(!empty($sendTo)){
                Mail::send($sendTo, 'Urgent: Assessment Charts are missing', 'assessment-images-missing', ['assessments' => $chartImageMissingAssessments]);
            }
        }
    }

    protected function createPDFReportFile(string $filePath = '', string $html = '', array $attributes = []){
        if(empty($filePath) || empty($html) || empty($attributes))
            return false;

        // Generate PDF
        $start = microtime(true);
        $html2pdf = new Html2Pdf('P', $attributes['layout'], 'fr', true, 'UTF-8', $attributes['spacing']);
        $html2pdf->pdf->SetDisplayMode('fullpage');
        $html2pdf->setTestTdInOnePage(false);
        $html2pdf->writeHTML($html);
        Logger::info("HTML parsing took " . (microtime(true) - $start) . " sec");
        // Save PDF file
        $html2pdf->output($filePath, 'F'); // 'F' = Save to file
        Logger::info("Output writing took " . (microtime(true) - $start) . " sec (total)");
        return true;
    }

    protected function fetchNeedsAssessmentChoices($assessment, $lang = 'en'){
        $needsChoicesResponse = $this->needsAssessmentResponsesService->list(['participantSessionId' => $assessment->session_id]);
        if(!isset($needsChoicesResponse->data) || empty($needsChoicesResponse->data)){
            return;
        }
        $queryParams = ["surveyId=".$assessment->needs_survey_id, "lang=".$lang];
        foreach($needsChoicesResponse->data as $index=>$choicedata){
            $queryParams[] = 'id[$in]='.$choicedata->choiceId;
        }

        if(empty($queryParams)){
            return;
        }

        $needsAssessmentChoices = $this->needsAssessmentChoicesService->listByQueryParams( $queryParams );
        if(!isset($needsAssessmentChoices->data) || empty($needsAssessmentChoices->data)){                    
            return;
        }

        return $needsAssessmentChoices;
    }
}