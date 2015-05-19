<?php

use yii\db\Schema;
use yii\db\Migration;

class m150518_191928_create_applications_table extends Migration
{
    public function up()
    {
        $this->createTable('applications', [
            'id'      => Schema::TYPE_PK,
            'name'    => Schema::TYPE_STRING . ' NOT NULL',
            'email'   => Schema::TYPE_STRING . ' NOT NULL',
            'subject' => Schema::TYPE_STRING . ' NOT NULL',
        ]);
    }

    public function down()
    {
        echo "m150518_191928_create_applications_table cannot be reverted.\n";

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
