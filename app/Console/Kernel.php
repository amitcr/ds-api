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
        $schedule->command(ClearTempUsers::class)->daily();
        $schedule->command(SendReminderEmails::class)->everyFiveMinutes();
        $schedule->command(ValidateCoupons::class)->everyMinute();
    }

    protected function commands()
    {
        $this->register(ClearTempUsers::class);
        $this->register(SendReminderEmails::class);
        $this->register(ValidateCoupons::class);
    }
}
