<?php

use yii\db\Schema;
use yii\db\Migration;

class m150612_101915_application_status extends Migration
{
    public function up()
    {
        $this->addColumn('applications', 'status', "ENUM('draft', 'approved', 'declined') NOT NULL DEFAULT 'draft'");
    }

    public function down()
    {
        echo "m150612_101915_application_status cannot be reverted.\n";

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
