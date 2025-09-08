<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class CompanyModel extends BaseModel
{
    protected $table = 'affcp_wp_companies'; // NO prefix here!
    protected $primaryKey = 'company_id';
    public $timestamps = false;

    protected $fillable = [
        'company_id',
        'user_id',
        'affiliate_id',
        'company_name',
        'company_email',
        'company_address_1',
        'company_address_2',
        'company_country',
        'company_state',
        'company_city',
        'postal_code',
        'company_price',
        'company_mgr_price',
        'credits',
        'status',
        'notes',
        'created_datetime',
        'modified_datetime',
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(UserModel::class, 'user_id', 'ID');
    }

    public function coupons(): HasMany
    {
        return $this->hasMany(CouponModel::class, 'company_id', 'company_id');
    }
    
    public function affiliate(): BelongsTo
    {
        return $this->belongsTo(AffiliateModel::class, 'affiliate_id', 'affiliate_id');
    }
}
