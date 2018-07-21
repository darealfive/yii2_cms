<?php

use console\components\Migration;
use common\models\CategoryImage;
use common\models\Category;
use common\models\Image;

/**
 * Class m180721_093309_create_table_category_image
 */
class m180721_093309_create_table_category_image extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable($tableName = CategoryImage::tableName(), [
            'category_id' => $this->integer()->notNull(),
            'image_id'    => $this->integer()->notNull(),
            'sort'        => $this->smallInteger()->unsigned()->notNull(),
        ], $this->tableOptions);

        $this->addPrimaryKey($tableName, $tableName, ['category_id', 'image_id']);

        $this->addForeignKeyAutoName($tableName, 'category_id', Category::tableName(), 'id', 'RESTRICT', 'CASCADE');
        $this->addForeignKeyAutoName($tableName, 'image_id', Image::tableName(), 'id', 'RESTRICT', 'CASCADE');

        return true;
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable(CategoryImage::tableName());

        return true;
    }
}
