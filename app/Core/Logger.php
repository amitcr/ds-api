<?php

namespace App\Core;

class Logger
{
    protected static $logPath = __DIR__ . '/../../logs/';

    /**
     * Write an info log
     */
    public static function info($message, array $context = [])
    {
        self::writeLog('info', $message, $context);
    }

    /**
     * Write an error log
     */
    public static function error($message, array $context = [])
    {
        self::writeLog('error', $message, $context);
    }

    /**
     * Write a warning log
     */
    public static function warning($message, array $context = [])
    {
        self::writeLog('warning', $message, $context);
    }

    /**
     * Internal log writer
     */
    protected static function writeLog($level, $message, array $context = [])
    {
        // Ensure log directory exists
        if (!is_dir(self::$logPath)) {
            mkdir(self::$logPath, 0777, true);
        }

        $date = date('Y-m-d');
        $time = date('H:i:s');
        $file = self::$logPath . $level . '-' . $date . '.log';

        $line = "[$date $time] " . strtoupper($level) . ": " . $message;
        if (!empty($context)) {
            $line .= ' ' . json_encode($context, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES);
        }

        file_put_contents($file, $line . PHP_EOL, FILE_APPEND);
    }
}
