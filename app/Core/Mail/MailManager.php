<?php
namespace App\Core\Mail;

use App\Core\Config;

class MailManager
{
    public static function make(): MailerInterface
    {
        $driver = Config::get('mailer.driver');

        switch ($driver) {
            case 'ses':
                return new SESMailer();
            case 'smtp':
            default:
                return new SMTPMailer();
        }
    }
}
