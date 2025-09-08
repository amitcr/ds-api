<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Relations\BelongsTo;

use App\Models\UserModel;

class UserMetaModel extends BaseModel
{
    protected $table = 'usermeta'; // NO prefix here!
    protected $primaryKey = 'umeta_id';
    public $timestamps = false;

    protected $fillable = [
        'umeta_id',
        'user_id',
        'meta_key',
        'meta_value',
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(UserModel::class, 'user_id', 'ID');
    }
}
