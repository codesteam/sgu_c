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

    public function getApplicationMessagesCount()
    {
        return $this->getApplicationMessages()->count();
    }

    public static function getCountNewMessages($conferenceEventId)
    {
        return self::find()
            ->where('messages_count > messages_views_count')
            ->andWhere(['conference_event_id' => $conferenceEventId])->count();
    }

    public static function getApplicationIdsWithNewMessages($conferenceEventId)
    {
        return self::find()->select('id')
            ->where('messages_count > messages_views_count')
            ->andWhere(['conference_event_id' => $conferenceEventId])
            ->limit(5)->column();
    }

    public function updateMessagesCount()
    {
        $this->messages_count = $this->applicationMessagesCount;
        $this->save(true, ['messages_count']);
    }

    public function updateMessagesViewsCount()
    {
        $this->messages_views_count = $this->applicationMessagesCount;
        $this->save(true, ['messages_views_count']);
    }
}