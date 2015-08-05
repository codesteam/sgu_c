<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\db\Expression;
use app\helpers\Mailer;

/**
 * Application message validation form
 */
class FormAdminApplicationMessage extends Model
{
    public $body;

    /**
     * Customized attribute labels
     *
     * @return array
     */
    public function attributeLabels()
    {
        return [
            'body' => Yii::t('application_message', 'Message'),
        ];
    }

    /**
     * Validation rules
     *
     * @return array
     */
    public function rules()
    {
        return [
            ['body', 'required'],
        ];
    }

    /**
     * Create application message
     *
     * @param object $application application object
     *
     * @return bool
     */
    public function create($application)
    {
        if (!$this->validate()) {
            return false;
        }

        // create application message
        $message                 = new ApplicationMessage();
        $message->application_id = $application->id;
        $message->body           = $this->body;
        $message->sender         = ApplicationMessage::SENDER_ADMIN;
        $message->created_at     = new Expression('NOW()');
        if (!$message->save()) {
            return false;
        }

        // update application total messages count
        $application->updateMessagesCount();

        // notify user
        Mailer::applicationMessageFromAdmin($message);

        return true;
    }
}