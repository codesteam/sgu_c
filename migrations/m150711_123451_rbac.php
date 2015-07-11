<?php

use yii\db\Schema;
use yii\db\Migration;

class m150711_123451_rbac extends Migration
{
    public function up()
    {
        $itemTable = '{{%auth_item}}';
        $itemChildTable = '{{%auth_item_child}}';
        $assignmentTable = '{{%auth_assignment}}';
        $ruleTable = '{{%auth_rule}}';

        $this->createTable($ruleTable, [
            'name' => Schema::TYPE_STRING . '(64) NOT NULL',
            'data' => Schema::TYPE_TEXT,
            'created_at' => Schema::TYPE_INTEGER,
            'updated_at' => Schema::TYPE_INTEGER,
            'PRIMARY KEY (name)',
        ]);

        $this->createTable($itemTable, [
            'name' => Schema::TYPE_STRING . '(64) NOT NULL',
            'type' => Schema::TYPE_INTEGER . ' NOT NULL',
            'description' => Schema::TYPE_TEXT,
            'rule_name' => Schema::TYPE_STRING . '(64)',
            'data' => Schema::TYPE_TEXT,
            'created_at' => Schema::TYPE_INTEGER,
            'updated_at' => Schema::TYPE_INTEGER,
            'PRIMARY KEY (name)',
            'FOREIGN KEY (rule_name) REFERENCES ' . $ruleTable . ' (name) ON DELETE SET NULL ON UPDATE CASCADE',
        ]);
        $this->createIndex('idx-auth_item-type', $itemTable, 'type');

        $this->createTable($itemChildTable, [
            'parent' => Schema::TYPE_STRING . '(64) NOT NULL',
            'child' => Schema::TYPE_STRING . '(64) NOT NULL',
            'PRIMARY KEY (parent, child)',
            'FOREIGN KEY (parent) REFERENCES ' . $itemTable . ' (name) ON DELETE CASCADE ON UPDATE CASCADE',
            'FOREIGN KEY (child) REFERENCES ' . $itemTable . ' (name) ON DELETE CASCADE ON UPDATE CASCADE',
        ]);

        $this->createTable($assignmentTable, [
            'item_name' => Schema::TYPE_STRING . '(64) NOT NULL',
            'user_id' => Schema::TYPE_STRING . '(64) NOT NULL',
            'created_at' => Schema::TYPE_INTEGER,
            'PRIMARY KEY (item_name, user_id)',
            'FOREIGN KEY (item_name) REFERENCES ' . $itemTable . ' (name) ON DELETE CASCADE ON UPDATE CASCADE',
        ]);
    }

    public function down()
    {
        echo "m150711_123451_rbac cannot be reverted.\n";

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
