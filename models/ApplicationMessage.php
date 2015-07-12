<?php

namespace app\models;

use yii\db\ActiveRecord;

class ApplicationMessage extends ActiveRecord
{
    const SENDER_USER  = 'user';
    const SENDER_ADMIN = 'admin';

    public static function tableName()
    {
        return '{{%application_message}}';
    }

    public function getApplication()
    {
        return $this->hasOne(Application::className(), array('id' => 'application_id'));
    }
}
