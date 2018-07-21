<?php

use console\components\Migration;
use common\models\Navigation;

/**
 * Class m180520_121726_create_table_navigation
 */
class m180520_121726_create_table_navigation extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable($tableName = Navigation::tableName(), [
            'id'         => $this->primaryKey(),
            'parent_id'  => $this->integer()->null(),
            'title'      => $this->string(32)->notNull(),
            'position'   => $this->smallInteger()->notNull(),
            'created_at' => $this->timestamp()->notNull()->defaultExpression('current_timestamp'),
            'updated_at' => $this->timestamp()->notNull()->defaultExpression('current_timestamp')
        ], $this->tableOptions);

        $this->addForeignKeyAutoName($tableName, 'parent_id', $tableName, 'id', 'RESTRICT', 'CASCADE');

        /*
         * It is not allowed to use the same position for a group of records
         */
        $this->createIndexAutoName($tableName, ['parent_id', 'position'], true);

        return true;
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable(Navigation::tableName());

        return true;
    }
}
