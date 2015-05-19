<?php

namespace app\models;

use yii\db\ActiveRecord;

class Application extends ActiveRecord
{
    public static function tableName()
    {
        return '{{%applications}}';
    }
}
