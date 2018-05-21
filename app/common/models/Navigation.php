<?php

namespace common\models;

use yii\db\ActiveQuery;

/**
 * This is the model class for table "navigation".
 *
 * @property integer      $id
 * @property integer      $parent_id
 * @property string       $title
 * @property string       $created_at
 * @property string       $updated_at
 *
 * The followings are the available model relations:
 * @property Navigation   $parent   the parent navigation element
 * @property Navigation[] $children the child navigation elements
 */
class Navigation extends CmsActiveRecord
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
    public function rules()
    {
        return [
            [['parent_id'], 'exist', 'targetAttribute' => 'id'],
            [['title'], 'required'],
            [['title'], 'string'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id'         => 'ID',
            'title'      => 'Title',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }

    /**
     * @return ActiveQuery
     */
    public function getParent()
    {
        return $this->hasOne(Navigation::class, ['id' => 'parent_id']);
    }

    /**
     * @return ActiveQuery
     */
    public function getChildren()
    {
        return $this->hasMany(Navigation::class, ['parent_id' => 'id']);
    }
}
