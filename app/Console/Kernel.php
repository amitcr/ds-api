<?php
namespace App\Console;

use App\Core\CronKernel;
use App\Core\Schedule;
use App\Console\Commands\ClearTempUsers;
use App\Console\Commands\SendReminderEmails;
use App\Console\Commands\ValidateCoupons;

class Kernel extends CronKernel
{
    protected function schedule(Schedule $schedule)
    {
        // $schedule->command(ClearTempUsers::class)->daily();
        // $schedule->command(SendReminderEmails::class)->everyMinute();
        // $schedule->command(ValidateCoupons::class)->dailyAt('00:00')->timezone('UTC');

        $schedule->command('emails:send-reminders')->everyMinute();
        $schedule->command('coupons:expire-status')->everyMinute();

    }

    protected function commands()
    {
        // $this->register(ClearTempUsers::class);
        $this->register(SendReminderEmails::class);
        $this->register(ValidateCoupons::class);
    }
}
