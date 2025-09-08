<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

use App\Models\UserModel;
use App\Models\ParticipantModel;

class ParticipantSessionModel extends BaseModel
{
    protected $table = 'mytemp_participant_sessions'; // NO prefix here!
    protected $primaryKey = 'id';
    public $timestamps = false;

    protected $fillable = [
        'id',
        'user_id',
        'participant_id',
        'access_token',
        'refresh_token',
        'ip_address',
        'user_agent',
        'expires_at',
        'refresh_expires_at',
        'created_at',
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(UserModel::class, 'user_id', 'ID');
    }

    public function participant(): BelongsTo
    {
        return $this->belongsTo(ParticipantModel::class, 'participant_id', 'participant_id');
    }
}
