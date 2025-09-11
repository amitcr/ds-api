<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;


class PaymentMethodModel extends BaseModel
{
    protected $table = 'mytemp_payment_methods'; // NO prefix here!
    protected $primaryKey = 'id';
    public $timestamps = false;

    public function user(): BelongsTo
    {
        return $this->belongsTo(UserModel::class, 'user_id', 'ID');
    }

    // TODO: Add has Many Through Relationship with Coupons, through Coupons Details Model

}
