<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;


class CouponDetailModel extends BaseModel
{
    protected $table = 'affcp_coupon_details'; // NO prefix here!
    protected $primaryKey = 'id';
    public $timestamps = false;

    public function coupon(): BelongsTo
    {
        return $this->belongsTo(CouponModel::class, 'coupon_id', 'coupon_id');
    }
    
    public function paymentmethod(): BelongsTo
    {
        return $this->belongsTo(PaymentMethodModel::class, 'payment_method_id', 'id');
    }
}
