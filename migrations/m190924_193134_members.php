<?php

use yii\db\Migration;

class m190924_193134_members extends Migration
{
    public function up()
    {
        $this->createTable('members', [
            'id'            => Schema::TYPE_PK,
            'username'      => Schema::TYPE_STRING . ' NOT NULL',
            'auth_key'      => Schema::TYPE_STRING . '(32) NOT NULL',
            'password_hash' => Schema::TYPE_STRING . ' NOT NULL',
        ]);
    }

    public function down()
    {
        echo "m190924_193134_members cannot be reverted.\n";

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
