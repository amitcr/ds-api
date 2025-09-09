<?php
namespace App\Console\Commands;

use App\Models\CouponModel; 
use App\Core\CommandInterface;
use App\Core\Logger;
use App\Core\Mail\Mail;
use Carbon\Carbon;

class CouponExpiryReminderEmail implements CommandInterface
{
    public $signature = 'emails:coupon-expire-reminder';
    public $description = 'Notify Affiliate or Company users about coupon expiry date before 3 days.';

    public function handle($arguments)
    {
        // Logger::info('Cron emails:coupon-expire-reminder called');
        $threeDaysLater = Carbon::now()->addDays(3)->toDateString();
        $coupons = CouponModel::with(['user'])->where(['end_date' => $threeDaysLater, 'is_locked'  => 0, 'coupon_type'  => 'prepaid_coupon_code'])->orderBy('created_datetime', 'asc')->get();
        
        if($coupons->isEmpty()){
            return false;
        }
        
        foreach($coupons as $coupon){   
            if(!empty($coupon->user) && !empty($coupon->user->user_email)){
                Mail::send($coupon->user->user_email, 'Your Prepaid Code at FourTemperaments Is About to Expire', 'coupon-expiry-reminder', ['coupon' => $coupon]);
            }
        }
        // Logger::info('Cron emails:coupon-expire-reminder completed');
    }
}
