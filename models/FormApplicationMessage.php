<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\db\Expression;

/**
 * Application message validation form
 */
class FormApplicationMessage extends Model
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

        $record                 = new ApplicationMessage();
        $record->application_id = $application->id;
        $record->body           = $this->body;
        $record->sender         = ApplicationMessage::SENDER_USER;
        $record->created_at     = new Expression('NOW()');
        return (bool)$record->save();
    }
}