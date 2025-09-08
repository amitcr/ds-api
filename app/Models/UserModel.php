<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

use App\Models\UserMetaModel;
use App\Models\ParticipantModel;
use App\Models\ParticipantSessionModel;

class UserModel extends BaseModel
{
    protected $table = 'users'; // NO prefix here!
    protected $primaryKey = 'ID';
    public $timestamps = false;

    protected $fillable = [
        'ID',
        'user_login',
        'user_pass',
        'user_nicename',
        'user_email',
        'user_url',
        'user_registered',
        'user_activation_key',
        'user_status',
        'display_name',
    ];

    // Relationships
    public function meta(): HasMany
    {
        return $this->hasMany(UserMetaModel::class, 'user_id', 'ID');
    }

    public function participant(): HasOne
    {
        return $this->hasOne(ParticipantModel::class, 'user_id', 'ID');
    }

    public function sessions(): HasMany
    {
        return $this->hasMany(ParticipantSessionModel::class, 'user_id', 'ID');
    }
}
