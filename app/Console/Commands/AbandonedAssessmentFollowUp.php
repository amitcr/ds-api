<?php
namespace App\Console\Commands;

use App\Core\CommandInterface;

use App\Models\AssessmentModel;
use Carbon\Carbon;

class AbandonedAssessmentFollowUp implements CommandInterface
{
    // public $signature = 'assessments:abandoned {days=7}';
    public $signature = 'assessments:abandoned-folloup';
    public $description = 'Send Abandoned Assessment Follow up emails via Mailjet';

    public function handle($arguments)
    {
        // $days = (int)($arguments['days'] ?? 7);
        $primaryListId = get_settings_option('mytemp_settings.assessment_abandoned_list_id');
        if(empty($primaryListId))
            return;

        // echo AssessmentModel::abandoned()->toSql(); die;
        $abandonedAssessments = AssessmentModel::abandoned()->get();
        if($abandonedAssessments->isEmpty())
            return;

        foreach($abandonedAssessments as $assessment){
            // pr($assessment);  die;
            // echo $assessment->details->followups[0]->opened_at; die;

            if(!empty($assessment->details) && isset($assessment->subscribed_at))
                continue;

            $contactId = UserMetaModel::where(['user_id' => $request->tokendata['user_id'], 'meta_key' => '_mailjet_contact_id'])->value('meta_value');

            $firstName = $assessment->first_name;
            $lastName = $assessment->last_name;

            if(empty($contactId)){
                
            }
        }
    }
}
