<?php
namespace App\Console\Commands;

use App\Models\CouponModel; 
use App\Models\AffiliateModel; 
use App\Models\CompanyModel; 
use App\Models\UserModel; 
use App\Models\CouponTrackingModel;
use App\Models\TransactionModel;
use App\Core\CommandInterface;
use Carbon\Carbon;

class ValidateCoupons implements CommandInterface
{
    public $signature = 'coupons:expire-status';
    public $description = 'Manage Prepaid & Mini Code Status.';

    public function handle($arguments)
    {
        // $days = (int)($arguments['days'] ?? 7);

        $yesterday = Carbon::yesterday()->toDateString();        
        // echo CouponModel::with(['affiliate', 'company', 'user'])->where(['status' => 'active'])->orderBy('created_datetime', 'desc')->limit(10)->toSql(); die;
        
        // $coupons = CouponModel::where(['end_date' => $yesterday, 'status' => 'active'])->get();
        $coupons = CouponModel::with(['affiliate', 'company'])->where(['status' => 'active'])->orderBy('created_datetime', 'asc')->offset(40)->limit(10)->get();
        if($coupons->isEmpty()){
            return false;   
        }
        
        foreach($coupons as $coupon){
            // $user = UserModel::find($coupon->user_id);
            // $affiliate = AffiliateModel::find($coupon->affiliate_id);
            // if(!empty($coupon->company_id) && $coupon->company_id > 0){
            //     $company = CompanyModel::find($coupon->company_id);
            // }

            $usage_counter = CouponTrackingModel::where(['coupon_id' => $coupon->coupon_id])->whereIn('usage_status', ['assigned', 'completed'])->count();
            if($coupon->affiliate->user_id == $coupon->user_id){
                if($coupon->affiliate_share < 0){
                    $credits_charged = $coupon->usage_limit * $coupon->affiliate_share;
                    $credits_used = $usage_counter * $coupon->affiliate_share;
                    $unused_charges = $credits_charged - $credits_used;
                }
                $object_type = $coupon->reversed_credits_to == "company" ? "company" : "affiliate";
                $object_id = $coupon->reversed_credits_to == "company" ? $coupon->company_id : $coupon->affiliate_id;
                $current_credits = $coupon->reversed_credits_to == "company" ? $coupon->company->credits : $coupon->affiliate->unused_credits;
                
            }else if(!empty($coupon->company->user_id == $coupon->user_id)){
                if($coupon->discount_amount > 0){
                    $credits_charged = $coupon->usage_limit * abs($coupon->discount_amount);
                    $credits_used = $usage_counter * abs($coupon->discount_amount);
                    $unused_charges = $credits_charged - $credits_used;
                }
                $object_type = 'company';
                $object_id = $count->company_id;
                $current_credits = $coupon->company->credits;
            }

            if($unused_charges > 0){
                $notes = 'Credits Reversed to your account after '.$coupon->coupon_code.' coupon code has been expired.';
                $transaction_array = [
                    'amount'    =>  $unused_charges,
                    'transaction_type'  =>  'reversal',
                    'transaction_object_type'   =>  $object_type,
                    'object_id' =>  $object_id,
                    'notes' =>  $notes
                ];

                $transaction = TransactionModel::create($transaction_array);

                if($object_type == "company"){
                    CompanyModel::update($coupon->company_id, ['credits' => $current_credits + $unused_charges]);
                }else{
                    AffiliateModel::update($coupon->affiliate_id, ['unused_credits' => $current_credits + $unused_charges]);
                }
            }
            // echo "Coupon: {$coupon->coupon_code}; Total Usage: {$total_used} \n";
        }

        // echo "Deleted {$count} temp users older than {$days} days.\n";
    }
}
