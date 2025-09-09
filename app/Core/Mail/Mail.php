<?php
namespace App\Core\Mail;

class Mail
{
    protected static ?MailerInterface $mailer = null;

    public static function init(): void
    {
        if (self::$mailer === null) {
            self::$mailer = MailManager::make();
        }
    }

    public static function getMailer(): MailerInterface
    {
        self::init();
        return self::$mailer;
    }

    public static function send(string $to, string $subject, string $view, array $data = []): bool
    {
        return self::getMailer()->send($to, $subject, $view, $data);
    }
}
