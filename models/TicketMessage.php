<?php

namespace app\models;

use yii\db\ActiveRecord;

class TicketMessage extends ActiveRecord
{
    public static function tableName()
    {
        return '{{%ticket_messages}}';
    }
}
