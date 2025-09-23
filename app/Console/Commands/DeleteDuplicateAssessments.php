<?php
namespace App\Console\Commands;

use App\Core\CommandInterface;

use Illuminate\Database\Capsule\Manager as DB;
use App\Models\ParticipantModel;
use App\Models\AssessmentRelationshipModel;
use App\Models\CouponTrackingModel;
use App\Models\AssessmentModel;
use App\Models\AssessmentPaymentModel;
use App\Core\Logger;
use App\Core\Config;
use Carbon\Carbon;

class DeleteDuplicateAssessments implements CommandInterface
{
    public $signature = 'assessments:delete-duplicates {days=1}';
    public $description = 'Sync Assessment stats with the google sheet.';

    public function handle($arguments)
    {
        $days = $arguments['days'] ?? 1;
        $questionsCompleted = $days == 30 ? 4 : 1;
        $registeredDate = Carbon::now()->subDays($days)->toDateString();

        // 1. Get matching participants in one query
        $query = ParticipantModel::where('temp', 1)->whereDate('date_registered', '<=', $registeredDate);
        if($days != 180){
            $query->whereHas('assessments', function ($q) {
                $q->whereIn('assessment_status', ['new', 'start'])
                ->where('questionsCompleted', '<', $questionsCompleted);
            });
        }

        $duplicateParticipants = $query->get(['participant_id', 'user_id']); // fetch only what we need

        if ($duplicateParticipants->isNotEmpty()) {
            $participantIds = $duplicateParticipants->pluck('participant_id');
            $userIds        = $duplicateParticipants->pluck('user_id');

            DB::transaction(function () use ($participantIds, $userIds) {
                if($days == 30){
                    UserModel::whereIn('ID', $userIds)->delete();
                }else {
                    // 2. Bulk delete related data
                    AssessmentRelationshipsModel::whereIn('participant_id', $participantIds)->delete();
                    CouponTrackingModel::whereIn('participant_id', $participantIds)->delete();
                    AssessmentModel::whereIn('participant_id', $participantIds)->delete();
                    AssessmentPaymentModel::whereIn('participant_id', $participantIds)->delete();

                    // 3. Delete users
                    UserModel::whereIn('ID', $userIds)->delete();

                    // 4. Delete participants last
                    ParticipantModel::whereIn('participant_id', $participantIds)->delete();
                }
            });
        }

    }

}