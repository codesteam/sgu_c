<?php

namespace app\models;

use yii\db\ActiveRecord;

class ConferenceEventDate extends ActiveRecord
{
    const ACTION_AT_BORDER_LT = 'lt';
    const ACTION_AT_BORDER_EQ = 'eq';

    public static function tableName()
    {
        return '{{%conference_event_dates}}';
    }
}
