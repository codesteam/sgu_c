<?php

namespace app\models;

use yii\db\ActiveRecord;

class ApplicationFile extends ActiveRecord
{
    public static function tableName()
    {
        return '{{%applications_files}}';
    }
}
