<?php
namespace App\Core;

abstract class CronKernel
{
    protected $commands = [];

    abstract protected function schedule(Schedule $schedule);
    abstract protected function commands();

    public function __construct()
    {
        $this->commands();
    }

    public function register($commandClass)
    {
        $instance = new $commandClass();
        $this->commands[$instance->signature] = $instance;
    }

    public function runCommand(array $argv)
    {
        $signature = $argv[1] ?? null;

        if (!$signature || $signature === 'list') {
            $this->listCommands();
            return;
        }

        if (!isset($this->commands[$signature])) {
            echo "Command [$signature] not found.\n";
            return;
        }

        $args = [];
        foreach (array_slice($argv, 2) as $arg) {
            if (strpos($arg, '=') !== false) {
                [$k, $v] = explode('=', $arg, 2);
                $args[$k] = $v;
            }
        }

        $this->commands[$signature]->handle($args);
    }

    public function runSchedule()
    {
        $schedule = new Schedule();
        $this->schedule($schedule);

        foreach ($schedule->getTasks() as $task) {
            if ($task->isDue()) {
                $this->runCommand([$task->command]);
            }
        }
    }

    protected function listCommands()
    {
        echo "Available commands:\n";
        foreach ($this->commands as $sig => $cmd) {
            echo "  $sig - {$cmd->description}\n";
        }
    }

    public function getCommands()
    {
        return $this->commands;
    }
}
