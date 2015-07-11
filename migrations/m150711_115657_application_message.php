<?php

use yii\db\Schema;
use yii\db\Migration;

class m150711_115657_application_message extends Migration
{
    public function up()
    {
        $this->createTable('application_message', [
            'id'             => Schema::TYPE_PK,
            'application_id' => Schema::TYPE_INTEGER . ' NOT NULL',
            'body'           => Schema::TYPE_TEXT . '    NOT NULL',
            'sender'         => "ENUM('user', 'admin')   NOT NULL",
            'created_at'     => Schema::TYPE_DATETIME . ' NOT NULL',
        ]);
        $this->addForeignKey('fk_application_message', 'application_message', 'application_id', 'applications', 'id', 'CASCADE', 'CASCADE');

    }

    public function down()
    {
        echo "m150711_115657_application_message cannot be reverted.\n";

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
