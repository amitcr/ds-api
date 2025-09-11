<?php
namespace App\Console\Commands;

use App\Core\CommandInterface;

use App\Models\CouponModel;  
use App\Models\CouponDetailModel;
use App\Core\Logger;
use App\Core\Mail\Mail;
use Carbon\Carbon;

class UpcomingAutoRechargeReminder implements CommandInterface
{
    public $signature = 'emails:auto-recharge-reminder';
    public $description = 'Notify Affiliate about code auto recharge event, before code usage limit expires.';

    public function handle($arguments)
    {
        // Logger::info('Cron emails:auto-recharge-reminder called');
        $coupons = CouponModel::with(['user', 'coupondetail'])->where(['status' => 'active', 'is_locked' => 0, 'coupon_type' => 'prepaid_coupon_code'])
            ->where(function ($q) {
                $q->whereRaw('((usage_count / usage_limit) * 100) >= 70')
                ->orWhereRaw('(usage_limit < 5 and (usage_limit - usage_count) <= 2)');
            })->whereHas('coupondetail', function($q) {
                $q->where('auto_recharge', 1);
            })->get();

        if($coupons->isEmpty()){
            return false;
        }
        
        foreach($coupons as $coupon){   
            if(empty($coupon->coupondetail) || $coupon->coupondetail->auto_recharge_email == 1)
                continue;

            if(Mail::send($coupon->user->user_email, 'Your Prepaid Code Is Running Low – Auto-Recharge Scheduled', 'auto-recharge-reminder', ['coupon' => $coupon])){
                CouponDetailModel::where('id', $coupon->coupondetail->id)->update(['auto_recharge_email' => 1]);
            }
            

        }
        // Logger::info('Cron emails:auto-recharge-reminder completed');
    }
}
