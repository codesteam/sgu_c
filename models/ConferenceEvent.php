<?php

namespace app\models;

use yii\db\ActiveRecord;

class ConferenceEvent extends ActiveRecord
{
    const STATUS_ACTIVE   = 'active';
    const STATUS_ARCHIVED = 'archived';

    public static function tableName()
    {
        return '{{%conference_events}}';
    }

    public static function getCurrent()
    {
        return ConferenceEvent::find()->where(['status' => self::STATUS_ACTIVE])->one();
    }

    public function getConferenceEventDates()
    {
        return $this->hasMany(ConferenceEventDate::className(), ['conference_event_id' => 'id']);
    }

    public function getConferenceCategories()
    {
        return $this->hasMany(Category::className(), ['conference_event_id' => 'id']);
    }
}
