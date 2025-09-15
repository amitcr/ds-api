<?php
namespace App\Console;

use App\Core\CronKernel;
use App\Core\Schedule;
// use App\Console\Commands\ClearTempUsers;
// use App\Console\Commands\SendReminderEmails;
use App\Console\Commands\ValidateCoupons;
use App\Console\Commands\CouponExpiryReminderEmail;
use App\Console\Commands\CouponAutoRecharge;
use App\Console\Commands\UpcomingAutoRechargeReminder;
use App\Console\Commands\AbandonedAssessmentFollowUp;

class Kernel extends CronKernel
{
    protected function schedule(Schedule $schedule)
    {
        // $schedule->command(ClearTempUsers::class)->daily();
        // $schedule->command(SendReminderEmails::class)->everyMinute();
        // $schedule->command(ValidateCoupons::class)->dailyAt('00:00')->timezone('UTC');

        // $schedule->command('emails:send-reminders')->everyMinute();
        $schedule->command('emails:coupon-expire-reminder')->dailyAt('16:00')->timezone('UTC');
        $schedule->command('emails:auto-recharge-reminder')->everyMinute();
        $schedule->command('coupons:coupon-auto-recharge')->everyMinute();
        $schedule->command('assessments:abandoned-folloup')->everyTwoMinutes();
        $schedule->command('coupons:expire-status')->dailyAt('06:00')->timezone('UTC');

    }

    protected function commands()
    {
        // $this->register(ClearTempUsers::class);
        // $this->register(SendReminderEmails::class);
        $this->register(ValidateCoupons::class);
        $this->register(CouponExpiryReminderEmail::class);
        $this->register(CouponAutoRecharge::class);
        $this->register(UpcomingAutoRechargeReminder::class);
        $this->register(AbandonedAssessmentFollowUp::class);
    }
}
