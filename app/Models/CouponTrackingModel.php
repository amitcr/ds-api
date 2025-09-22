<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Relations\BelongsTo;

class CouponTrackingModel extends BaseModel
{
    protected $table = 'affcp_coupons_tracking'; // NO prefix here!
    protected $primaryKey = 'id';
    public $timestamps = false;

    public function assessment(): BelongsTo
    {
        return $this->belongsTo(UserModel::class, 'assessment_id', 'assessment_id');
    }
    
    public function coupon(): BelongsTo
    {
        return $this->belongsTo(CouponModel::class, 'coupon_id', 'coupon_id');
    }
    
    public function affiliate(): BelongsTo
    {
        return $this->belongsTo(AffiliateModel::class, 'affiliate_id', 'affiliate_id');
    }
    
    public function company(): BelongsTo
    {
        return $this->belongsTo(CompanyModel::class, 'company_id', 'company_id');
    }
}
