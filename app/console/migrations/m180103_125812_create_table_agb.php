<?php

use yii\db\Migration;
use backend\models\Agb;

/**
 * Class m180103_125812_create_table_agb
 */
class m180103_125812_create_table_agb extends Migration
{
    public function safeUp()
    {
        $this->createTable(Agb::tableName(), [
            'id'         => $this->primaryKey(),
            'text'       => $this->text()->notNull(),
            'created_at' => $this->timestamp()->notNull()->defaultExpression('current_timestamp'),
            'updated_at' => $this->timestamp()->notNull()
        ]);
    }

    public function safeDown()
    {
        $this->dropTable(Agb::tableName());

        return true;
    }
}
