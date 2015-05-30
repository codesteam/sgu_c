<?php

use yii\db\Schema;
use yii\db\Migration;

class m150530_071342_application_members_fix extends Migration
{
    public function up()
    {
        $this->dropColumn('applications', 'subject');

        $this->alterColumn('application_members', 'name',       Schema::TYPE_STRING.' NULL');
        $this->alterColumn('application_members', 'email',      Schema::TYPE_STRING.' NULL');
        $this->alterColumn('application_members', 'location',   Schema::TYPE_STRING.' NULL');
        $this->alterColumn('application_members', 'profession', Schema::TYPE_STRING.' NULL');
        $this->alterColumn('application_members', 'rank',       Schema::TYPE_STRING.' NULL');
    }

    public function down()
    {
        echo "m150530_071342_application_members_fix cannot be reverted.\n";

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
