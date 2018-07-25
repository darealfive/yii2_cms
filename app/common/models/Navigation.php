<?php

namespace common\models;

use yii\db\ActiveQuery;

/**
 * This is the model class for table "navigation".
 *
 * @property int          $id
 * @property int          $parent_id
 * @property string       $title
 * @property int          $position
 *
 * The followings are the available model relations:
 * @property Navigation   $parent   the parent navigation element
 * @property Navigation[] $children the child navigation elements
 */
abstract class Navigation extends ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'navigation';
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return array_merge(parent::attributeLabels(), [
            'id'       => 'ID',
            'title'    => 'Title',
            'position' => 'Position',
        ]);
    }

    /**
     * @return ActiveQuery
     */
    public function getParent()
    {
        return $this->hasOne(static::class, ['id' => 'parent_id']);
    }

    /**
     * @return ActiveQuery
     */
    public function getChildren()
    {
        return $this->hasMany(static::class, ['parent_id' => 'id']);
    }
}
