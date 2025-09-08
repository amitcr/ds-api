<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class AssessmentModel extends BaseModel
{
    protected $table = 'mytemp_assessments'; // NO prefix here!
    protected $primaryKey = 'assessment_id';
    public $timestamps = false;

    protected $fillable = [
        'assessment_id',
        'user_id',
        'participant_id',
        'first_name',
        'last_name',
        'session_id',
        'application_id',
        'survey_id',
        'needs_survey_id',
        'assessment_result_id',
        'assessment_status',
        'needs_assessment_status',
        'pdf_status',
        'override_notes',
        'created_at',
        'started_at',
        'completed_at',
        'modified_at',
        'manual_request',
        'upgraded_at',
        'access_level',
        'questionsCompleted',
        'details',
        'pdf_script',
    ];

    public function payment(): HasOne
    {
        return $this->hasOne(PaymentModel::class, 'assessment_id', 'assessment_id');
    }
    
    public function user(): BelongsTo
    {
        return $this->belongsTo(UserModel::class, 'user_id', 'ID');
    }
    
    public function participant(): BelongsTo
    {
        return $this->belongsTo(UserModel::class, 'participant_id', 'participant_id');
    }
}
