<?php

use yii\db\Schema;
use yii\db\Migration;

class m150611_182810_users extends Migration
{
    public function up()
    {
        $this->createTable('users', [
            'id'            => Schema::TYPE_PK,
            'username'      => Schema::TYPE_STRING . ' NOT NULL',
            'auth_key'      => Schema::TYPE_STRING . '(32) NOT NULL',
            'password_hash' => Schema::TYPE_STRING . ' NOT NULL',
        ]);
    }

    public function down()
    {
        echo "m150611_182810_users cannot be reverted.\n";

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
