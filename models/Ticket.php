<?php

namespace app\models;

use yii\db\ActiveRecord;

class Ticket extends ActiveRecord
{
    public static function tableName()
    {
        return '{{%tickets}}';
    }

    public function getTicketMessages()
    {
        return $this->hasMany(TicketMessage::className(), array('ticket_id' => 'id'));
    }
}
