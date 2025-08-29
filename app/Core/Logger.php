<?php

namespace App\Core;

class Logger
{
    public static function info($message, array $context = [])
    {
        $line = '[' . date('Y-m-d H:i:s') . '] ' . $message;
        if (!empty($context)) {
            $line .= ' ' . json_encode($context);
        }
        file_put_contents(__DIR__ . '/../../logs/app.log', $line . PHP_EOL, FILE_APPEND);
    }
}
