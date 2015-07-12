<?php

namespace app\helpers;

use Yii;

/**
 * Mailer functions
 */
class Mailer
{
    public static function applicationCreated($application)
    {
        Yii::$app->mailer->compose('application/created', ['application' => $application])
            ->setFrom($_ENV['MAILER_FROM'])
            ->setTo($application->commonMember->email)
            ->setSubject(Yii::t('mailer', 'Conference application'))
            ->send();
    }

    public static function applicationMessageFromAdmin($message)
    {
        Yii::$app->mailer->compose('application/admin_message', ['message' => $message])
            ->setFrom($_ENV['MAILER_FROM'])
            ->setTo($message->application->commonMember->email)
            ->setSubject(Yii::t('mailer', 'Conference application message'))
            ->send();
    }
}