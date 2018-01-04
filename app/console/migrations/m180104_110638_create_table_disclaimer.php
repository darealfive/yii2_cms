<?php

use yii\db\Migration;
use common\models\Disclaimer;

/**
 * Class m180104_110638_create_table_disclaimer
 */
class m180104_110638_create_table_disclaimer extends Migration
{
    public function safeUp()
    {
        $this->createTable(Disclaimer::tableName(), [
            'id'         => $this->primaryKey(),
            'text'       => $this->text()->notNull(),
            'created_at' => $this->timestamp()->notNull()->defaultExpression('current_timestamp'),
            'updated_at' => $this->timestamp()->notNull()
        ]);
    }

    public function safeDown()
    {
        $this->dropTable(Disclaimer::tableName());

        return true;
    }
}
