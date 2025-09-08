<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class AffiliateModel extends BaseModel
{
    protected $table = 'affcp_wp_affiliates'; // NO prefix here!
    protected $primaryKey = 'affiliate_id';
    public $timestamps = false;

    protected $fillable = [
        'affiliate_id',
        'user_id',
        'rate_type',
        'affiliate_price',
        'affiliate_rate',
        'affiliate_mgr_price',
        'affiliate_mgr_share',
        'company_name',
        'payment_email',
        'status',
        'earnings',
        'unpaid_earnings',
        'credits',
        'unused_credits',
        'notes',
        'date_registered',
        'mini_report_billing',
        'mini_report_price',
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(UserModel::class, 'user_id', 'ID');
    }

    public function coupons(): HasMany
    {
        return $this->hasMany(CouponModel::class, 'affiliate_id', 'affiliate_id');
    }
    
    public function companies(): HasMany
    {
        return $this->hasMany(CompanyModel::class, 'affiliate_id', 'affiliate_id');
    }
}
