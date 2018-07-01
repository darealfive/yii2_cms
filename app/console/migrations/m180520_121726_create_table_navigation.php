<?php

use common\models\Navigation;

/**
 * Class m180520_121726_create_table_navigation
 */
class m180520_121726_create_table_navigation extends \console\components\Migration
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
            'created_at' => $this->timestamp()->notNull()->defaultExpression('current_timestamp'),
            'updated_at' => $this->timestamp()->notNull()->defaultExpression('current_timestamp')
        ], $this->tableOptions);

        $this->addForeignKeyAutoName($tableName, 'parent_id', $tableName, 'id', 'RESTRICT', 'CASCADE');

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
