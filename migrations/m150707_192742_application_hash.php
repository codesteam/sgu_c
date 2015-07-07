<?php

use yii\db\Schema;
use yii\db\Migration;

class m150707_192742_application_hash extends Migration
{
    public function up()
    {
        $this->addColumn('applications', 'hash', Schema::TYPE_STRING."(32) NOT NULL DEFAULT ''");
    }

    public function down()
    {
        echo "m150707_192742_application_hash cannot be reverted.\n";

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
