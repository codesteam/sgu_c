<?php

use yii\db\Schema;
use yii\db\Migration;

class m150729_193729_application_decline_comment extends Migration
{
    public function up()
    {
        $this->addColumn('applications', 'decline_comment', Schema::TYPE_STRING." NULL DEFAULT NULL");
    }

    public function down()
    {
        echo "m150729_193729_application_decline_comment cannot be reverted.\n";

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
