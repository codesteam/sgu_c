<?php

namespace app\models;

use yii\db\ActiveRecord;

class Application extends ActiveRecord
{
    public static function tableName()
    {
        return '{{%applications}}';
    }

    public function getCategory()
    {
        return $this->hasOne(Category::className(), array('id' => 'category_id'));
    }

    public function getApplicationMembers()
    {
        return $this->hasMany(ApplicationMember::className(), array('application_id' => 'id'));
    }

    public function getApplicationFiles()
    {
        return $this->hasMany(ApplicationFile::className(), array('application_id' => 'id'));
    }
}
