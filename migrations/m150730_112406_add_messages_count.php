<?php

use yii\db\Schema;
use yii\db\Migration;

class m150730_112406_add_messages_count extends Migration
{
    public function up()
    {
        $this->addColumn('applications', 'messages_count', 'int DEFAULT 0');
    }

    public function down()
    {
        echo "m150730_112406_add_messages_count cannot be reverted.\n";

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
