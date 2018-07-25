<?php

namespace common\models;

use yii\db\ActiveQuery;

/**
 * This is the model class for table "image".
 *
 * @property int             $id
 * @property string          $uri
 * @property string          $alt
 *
 * The followings are the available model relations:
 * @property ImageCategory[] $imageCategories
 * @property Category[]      $categories
 */
abstract class Image extends ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'image';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['uri', 'alt'], 'required'],
            [['uri'], 'string', 'max' => 128],
            [['alt'], 'string', 'max' => 64],
            [['uri'], 'unique'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return array_merge(parent::attributeLabels(), [
            'id'  => 'ID',
            'uri' => 'URI',
            'alt' => 'Alternative text',
        ]);
    }

    /**
     * @return ActiveQuery
     */
    public function getImageCategories()
    {
        return $this->hasMany(ImageCategory::class, ['image_id' => 'id']);
    }

    /**
     * @return ActiveQuery
     */
    public function getCategories()
    {
        return $this->hasMany(Category::class, ['id' => 'category_id'])->via('imageCategories');
    }
}
