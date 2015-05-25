<?php

use yii\db\Schema;
use yii\db\Migration;

class m150524_193639_application_members extends Migration
{
    public function up()
    {
        $this->createTable('categories', [
            'id'   => Schema::TYPE_PK,
            'name' => Schema::TYPE_STRING . ' NOT NULL',
        ]);

        $this->dropColumn('applications', 'name');
        $this->dropColumn('applications', 'email');
        $this->addColumn('applications', 'report', Schema::TYPE_INTEGER. ' NOT NULL');
        $this->addColumn('applications', 'category_id', Schema::TYPE_INTEGER. ' NOT NULL');
        $this->addColumn('applications', 'comment', Schema::TYPE_STRING. ' NULL');
        $this->addForeignKey('fk_application_categories', 'applications', 'category_id', 'categories', 'id', 'CASCADE', 'CASCADE');

        $this->createTable('application_members', [
            'id'             => Schema::TYPE_PK,
            'application_id' => Schema::TYPE_INTEGER . ' NOT NULL',
            'name'           => Schema::TYPE_STRING . ' NOT NULL',
            'email'          => Schema::TYPE_STRING . ' NOT NULL',
            'phone'          => Schema::TYPE_STRING . ' NULL',
            'location'       => Schema::TYPE_STRING . ' NOT NULL',
            'profession'     => Schema::TYPE_STRING . ' NOT NULL',
            'rank'           => Schema::TYPE_STRING . ' NOT NULL',
            'post_address'   => Schema::TYPE_STRING . ' NULL',
        ]);
        $this->addForeignKey('fk_application_members', 'application_members', 'application_id', 'applications', 'id', 'CASCADE', 'CASCADE');
    }

    public function down()
    {
        echo "m150524_193639_application_members cannot be reverted.\n";

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
