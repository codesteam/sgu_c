<?php

namespace app\models;

use yii\db\ActiveRecord;

class ApplicationMember extends ActiveRecord
{
    public static function tableName()
    {
        return '{{%application_members}}';
    }
}
