<?php
namespace App\Core;

class Schedule
{
    protected $tasks = [];

    public function command(string $commandClass)
    {
        $task = new ScheduleTask($commandClass);
        $this->tasks[] = $task;
        return $task;
    }

    public function getTasks()
    {
        return $this->tasks;
    }
}
