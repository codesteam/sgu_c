<?php

use yii\db\Schema;
use yii\db\Migration;

class m150521_193738_application_files extends Migration
{
    public function up()
    {
        $this->createTable('application_files', [
            'id'             => Schema::TYPE_PK,
            'application_id' => Schema::TYPE_INTEGER . ' NOT NULL',
            'name'           => Schema::TYPE_STRING . ' NOT NULL',
        ]);
        $this->addForeignKey('fk_folder_user', 'application_files', 'application_id', 'applications', 'id', 'CASCADE', 'CASCADE');
    }

    public function down()
    {
        echo "m150521_193738_application_files cannot be reverted.\n";

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
