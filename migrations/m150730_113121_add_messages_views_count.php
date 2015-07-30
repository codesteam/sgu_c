<?php

use yii\db\Schema;
use yii\db\Migration;

class m150730_113121_add_messages_views_count extends Migration
{
    public function up()
    {
        $this->addColumn('applications', 'messages_views_count', 'int');
    }

    public function down()
    {
        echo "m150730_113121_add_messages_views_count cannot be reverted.\n";

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
