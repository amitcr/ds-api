<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

use App\Models\UserModel;

class CouponModel extends BaseModel
{
    protected $table = 'affcp_wp_coupons'; // NO prefix here!
    protected $primaryKey = 'coupon_id';
    public $timestamps = false;

    public function user(): BelongsTo
    {
        return $this->belongsTo(UserModel::class, 'user_id', 'ID');
    }
    
    public function affiliate(): BelongsTo
    {
        return $this->belongsTo(AffiliateModel::class, 'affiliate_id', 'affiliate_id');
    }
    
    public function company(): BelongsTo
    {
        return $this->belongsTo(CompanyModel::class, 'company_id', 'company_id');
    }
    
    public function trackings(): HasMany
    {
        return $this->hasMany(CouponTrackingModel::class, 'coupon_id', 'coupon_id');
    }
}
