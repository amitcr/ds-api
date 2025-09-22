<?php
namespace App\Console\Commands;

use App\Core\CommandInterface;

use App\Models\AssessmentModel;
use App\Services\Api\SelfAssessmentResultsService;
use App\Services\Api\SelfAssessmentResponsesService;
use App\Services\Api\SelfAssessmentChoicesService;
use App\Services\Api\NeedsAssessmentResponsesService;
use App\Services\Api\NeedsAssessmentChoicesService;
use App\Core\Mail\Mail;
use App\Core\Logger;
use App\Core\Config;
use Carbon\Carbon;

use Spipu\Html2Pdf\Html2Pdf;

class GenerateAssessmentReport implements CommandInterface
{
    // public $signature = 'assessments:abandoned {days=7}';
    public $signature = 'assessments:generate-report';
    public $description = 'Generate Assessment PDF report file for missing assessments';

    protected $selfAssessmentResultsService;
    protected $selfAssessmentResponsesService;
    protected $selfAssessmentChoicesService;
    protected $needsAssessmentResponsesService;
    protected $needsAssessmentChoicesService;

    public function __construct(){        
        $this->selfAssessmentResultsService = new SelfAssessmentResultsService();
        $this->selfAssessmentResponsesService = new SelfAssessmentResponsesService();
        $this->selfAssessmentChoicesService = new SelfAssessmentChoicesService();
        $this->needsAssessmentResponsesService = new NeedsAssessmentResponsesService();
        $this->needsAssessmentChoicesService = new NeedsAssessmentChoicesService();
    }

    public function handle($arguments)
    {
        Logger::info('cron assessments:generate-report started');
        $modifiedAt = Carbon::now()->subMinutes(2);
        $assessments = AssessmentModel::with('user')->where('assessment_status', 'finished')
            ->where('pdf_status', 0)
            ->whereNull('pdf_script')
            ->where('modified_at', '<=', $modifiedAt)
            ->orderByDesc('assessment_id')
            ->get();

        
        if($assessments->isEmpty())
            return;

        foreach($assessments as $assessment){
            Logger::info('validating '.$assessment->assessment_id.' assessment PDF Report status');
            // echo $assessment->assessment_id; die;
            // pr($assessment); die;
            
            if($assessment->pdf_status ==1)
                continue;

            $participantName = $assessment->first_name.' '.$assessment->last_name;
            $assessmentPdfFileName = $assessment->assessment_id."-".trim(str_replace(" ", "-", $participantName)).'-'. date("m-d-Y", strtotime($assessment->created_at)).".pdf";

            $filePath = PROJECT_ROOT.'/assessments/pdf/'.$assessmentPdfFileName;
            // Validate if PDF file already created or not
            if(file_exists($filePath)){
                Logger::info('Assessment Report already exists for '.$assessment->assessment_id);
                $assessment->pdf_status = 1;   
                $assessment->save();
                continue;
            }

            if(get_assessment_chart_image($assessment->assessment_id) && get_assessment_chart_image($assessment->assessment_id, 'single')){
                Logger::info('Assessment Chart Images exists, now generating PDF Report '.$assessment->assessment_id);
                $assessmentResults = $this->selfAssessmentResultsService->getById($assessment->assessment_result_id);
                Logger::info('Assessment assessmentResults received '.$assessment->assessment_id, (array) $assessmentResults);
                $selfChoicesResponse = $this->selfAssessmentResponsesService->list(['participantSessionId' => $assessment->session_id]);
                Logger::info('Assessment selfChoicesResponse received '.$assessment->assessment_id, (array) $selfChoicesResponse);
                if(!isset($selfChoicesResponse->data) || empty($selfChoicesResponse->data)){
                    Logger::error('Failed to get selfChoicesResponse for '.$assessment_id.': ', (array) $selfChoicesResponse);
                    continue;
                }

                $dMostChoices = $iMostChoices = $sMostChoices = $cMostChoices = array();
                $dLeastChoices = $iLeastChoices = $sLeastChoices = $cLeastChoices = array();

                $queryParams = [];
                foreach($selfChoicesResponse->data as $index=>$choicedata){
                    $queryParams[] = 'questionId[$in]='.$choicedata->questionId;
                }
                
                if(empty($queryParams)){
                    Logger::error('queryParams are empty for '.$assessment_id.': ', $selfChoicesResponse);
                    continue;
                }

                $queryParams[] = '$limit=10000000';
                $selfAssessmentChoices = $this->selfAssessmentChoicesService->listByQueryParams( $queryParams );
                Logger::info('Assessment selfAssessmentChoices received '.$assessment->assessment_id, (array) $selfAssessmentChoices);
                if(!isset($selfAssessmentChoices->data) || empty($selfAssessmentChoices->data)){
                    Logger::error('Failed to get selfAssessmentChoices for '.$assessment_id.': ', (array) $selfAssessmentChoices);
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

                Logger::info('Fetching assessment needsAssessmentResponsesService '.$assessment->assessment_id);
                $needsChoicesResponse = $this->needsAssessmentResponsesService->list(['participantSessionId' => $assessment->session_id]);
                Logger::info('Assessment needsChoicesResponse received '.$assessment->assessment_id, (array) $needsChoicesResponse);
                if(!isset($needsChoicesResponse->data) || empty($needsChoicesResponse->data)){
                    Logger::error('Failed to get needsChoicesResponse for '.$assessment_id.': ', (array) $needsChoicesResponse);
                    continue;
                }
                $queryParams = ["surveyId=".$assessment->needs_survey_id];
                foreach($needsChoicesResponse->data as $index=>$choicedata){
                    $queryParams[] = 'id[$in]='.$choicedata->choiceId;
                }

                if(empty($queryParams)){
                    Logger::error('queryParams are empty for '.$assessment_id.': ', $needsChoicesResponse);
                    continue;
                }

                $needsAssessmentChoices = $this->needsAssessmentChoicesService->listByQueryParams( $queryParams );
                Logger::info('Assessment needsAssessmentChoices received '.$assessment->assessment_id, (array) $needsAssessmentChoices);
                if(!isset($needsAssessmentChoices->data) || empty($needsAssessmentChoices->data)){
                    Logger::error('Failed to get needsAssessmentChoices for '.$assessment_id.': ', (array) $needsAssessmentChoices);
                    continue;
                }

                Logger::info('include template-report.php file '.$assessment->assessment_id);
                // pr($needsAssessmentChoices); die;
                // Render the template with PHP variables
                ob_start();
                include PROJECT_ROOT . '/api/resources/views/template-report.php';
                $html = ob_get_clean();

                Logger::info('report template-report.php file included '.$assessment->assessment_id);
                // echo $html; die;
                // Generate PDF
                $start = microtime(true);
                $html2pdf = new Html2Pdf('P', array(215,307), 'fr', true, 'UTF-8', array(0,0,0,0));
                $html2pdf->pdf->SetDisplayMode('fullpage');
			    $html2pdf->setTestTdInOnePage(false);
                $html2pdf->writeHTML($html);
                Logger::info("HTML parsing took " . (microtime(true) - $start) . " sec");
                // Save PDF file
                $html2pdf->output($filePath, 'F'); // 'F' = Save to file
                // Logger::info('report PDF file file created '.$assessment->assessment_id);
                Logger::info("Output writing took " . (microtime(true) - $start) . " sec (total)");

                die("DONE");
                // Mark as generated
                // $assessment->pdf_status = 1;
                // $assessment->save();
            }else{
                // TODO: 
                $chartImageMissingAssessments[] = $assessment;
            }
            
        }

        // echo 'Missing Chart Image Assessments: '; pr($chartImageMissingAssessments); die;
        if(!empty($chartImageMissingAssessments) && (date("i", strtotime("+2 minutes ".$modifiedAt)) == '00' || date("i", strtotime("+2 minutes ".$modifiedAt)) % 15 == 0 ) ){
            $sendTo = Config::get('app.env') == "local" ? Config::get('app.email') : get_settings_option('admin_email');
            if(!empty($sendTo)){
                Mail::send($sendTo, 'Urgent: Assessment Charts are missing', 'assessment-images-missing', ['assessments' => $chartImageMissingAssessments]);
            }
        }
    }
}
