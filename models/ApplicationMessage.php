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
}
