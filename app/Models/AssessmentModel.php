<?php
namespace App\Models;

class AssessmentModel extends BaseModel
{
    protected $table = 'mytemp_assessments'; // NO prefix here!
    protected $primaryKey = 'assessment_id';
    public $timestamps = false;

    protected $fillable = [
        'participant_id',
        'user_id',
        'affiliate_id',
        'assessment_status',
        'assessment_pattern',
        'questionsCompleted',
        'created_at',
        'updated_at'
    ];
}
