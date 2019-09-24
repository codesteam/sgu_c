<?php

namespace app\models;

use Yii;
use yii\db\ActiveRecord;

class Member extends ActiveRecord
{
    public static function tableName()
    {
        return '{{%members}}';
    }

    public static function findByUsername($username)
    {
        return static::findOne(['username' => $username]);
    }


    public function validatePassword($password)
    {
        return $password == $this->password_hash;
    }
}
