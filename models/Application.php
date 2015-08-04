<?php

namespace app\models;

use yii\db\ActiveRecord;

class Application extends ActiveRecord
{
    const STATUS_DRAFT    = 'draft';
    const STATUS_APPROVED = 'approved';
    const STATUS_DECLINED = 'declined';

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

    public function getCommonMember()
    {
        return $this->applicationMembers[0];
    }

    public function getApplicationFiles()
    {
        return $this->hasMany(ApplicationFile::className(), array('application_id' => 'id'));
    }

    public function getApplicationMessages()
    {
        return $this->hasMany(ApplicationMessage::className(), array('application_id' => 'id'));
    }

    public static function getCountNewMessages()
    {
        return self::find()->select('sum(messages_count-messages_views_count)')->scalar();
    }

    public static function getApplicationIdsWithNewMessages()
    {
        return self::find()->select('id')->where('messages_count > messages_views_count')->limit(5)->column();
    }

    public function updateMessagesCount()
    {
        $this->messages_count = count($this->applicationMessages);
        $this->save(true, ['messages_count']);
    }
}
