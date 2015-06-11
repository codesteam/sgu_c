<?php

use yii\db\Schema;
use yii\db\Migration;

class m150611_195501_support extends Migration
{
    public function up()
    {
        $this->createTable('tickets', [
            'id'         => Schema::TYPE_PK,
            'subject'    => Schema::TYPE_STRING . ' NOT NULL',
            'created_at' => Schema::TYPE_DATETIME . ' NOT NULL',
        ]);
        $this->createTable('ticket_messages', [
            'id'         => Schema::TYPE_PK,
            'ticket_id'  => Schema::TYPE_INTEGER . ' NOT NULL',
            'email'      => Schema::TYPE_STRING . ' NOT NULL',
            'body'       => Schema::TYPE_TEXT . ' NOT NULL',
            'created_at' => Schema::TYPE_DATETIME . ' NOT NULL',
        ]);
        $this->addForeignKey('fk_ticket_messages_tickets', 'ticket_messages', 'ticket_id', 'tickets', 'id', 'CASCADE', 'CASCADE');
    }

    public function down()
    {
        echo "m150611_195501_support cannot be reverted.\n";

        return false;
    }
    
    /*
    // Use safeUp/safeDown to run migration code within a transaction
    public function safeUp()
    {
    }
    
    public function safeDown()
    {
    }
    */
}
