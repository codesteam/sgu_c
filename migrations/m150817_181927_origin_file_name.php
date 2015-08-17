<?php

use yii\db\Schema;
use yii\db\Migration;

class m150817_181927_origin_file_name extends Migration
{
    public function up()
    {
        $this->addColumn('application_files', 'name_origin', Schema::TYPE_STRING."(1000) NULL DEFAULT NULL");
        $this->execute('UPDATE application_files SET name_origin = name');
    }

    public function down()
    {
        echo "m150817_181927_origin_file_name cannot be reverted.\n";

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
