<?php

use yii\db\Schema;
use yii\db\Migration;

class m160402_211138_add_conferences_fk extends Migration
{
    public function up()
    {
        $this->addColumn('applications', 'conference_event_id', Schema::TYPE_INTEGER." NOT NULL");
        $this->execute('UPDATE applications SET conference_event_id = 1');
        $this->addForeignKey('fk_applications', 'applications', 'conference_event_id', 'conference_events', 'id', 'CASCADE', 'CASCADE');
    }

    public function down()
    {
        echo "m160402_211138_add_conferences_fk cannot be reverted.\n";

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
