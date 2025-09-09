<?php
namespace App\Console;

use App\Core\CronKernel;
use App\Core\Schedule;
// use App\Console\Commands\ClearTempUsers;
// use App\Console\Commands\SendReminderEmails;
use App\Console\Commands\ValidateCoupons;
use App\Console\Commands\CouponExpiryReminderEmail;

class Kernel extends CronKernel
{
    protected function schedule(Schedule $schedule)
    {
        // $schedule->command(ClearTempUsers::class)->daily();
        // $schedule->command(SendReminderEmails::class)->everyMinute();
        // $schedule->command(ValidateCoupons::class)->dailyAt('00:00');

        // $schedule->command('emails:send-reminders')->everyMinute();
        $schedule->command('emails:coupon-expire-reminder')->dailyAt('00:00');
        $schedule->command('coupons:expire-status')->dailyAt('00:00');

    }

    protected function commands()
    {
        // $this->register(ClearTempUsers::class);
        // $this->register(SendReminderEmails::class);
        $this->register(CouponExpiryReminderEmail::class);
        $this->register(ValidateCoupons::class);
    }
}
