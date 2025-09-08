<?php
namespace App\Core;

class ScheduleTask
{
    public $command;
    protected $expression = '* * * * *';

    public function __construct(string $command)
    {
        $this->command = $command;
    }

    public function cron(string $expr)
    {
        $this->expression = $expr;
        return $this;
    }

    public function everyMinute() { return $this->cron('* * * * *'); }
    public function everyFiveMinutes() { return $this->cron('*/5 * * * *'); }
    public function hourly() { return $this->cron('0 * * * *'); }
    public function daily() { return $this->cron('0 0 * * *'); }
    public function dailyAt($time) {
        [$h,$m] = explode(':', $time);
        return $this->cron("$m $h * * *");
    }

    public function isDue(\DateTime $date = null)
    {
        $date = $date ?: new \DateTime();
        $cron = new CronExpression($this->expression);
        return $cron->isDue($date);
    }
}
