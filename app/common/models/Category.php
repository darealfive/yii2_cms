<?php

namespace common\models;

use yii\db\ActiveQuery;

/**
 * This is the model class for table "category".
 *
 * @property int             $id
 * @property string          $name
 *
 * The followings are the available model relations:
 * @property ImageCategory[] $imageCategories
 * @property Image[]         $images
 */
abstract class Category extends ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'category';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name'], 'required'],
            [['name'], 'string', 'max' => 32],
            [['name'], 'unique'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return array_merge(parent::attributeLabels(), [
            'id'   => 'ID',
            'name' => 'Name',
        ]);
    }

    /**
     * @return ActiveQuery
     */
    public function getImageCategories()
    {
        return $this->hasMany(ImageCategory::class, ['category_id' => 'id']);
    }

    /**
     * @return ActiveQuery
     */
    public function getImages()
    {
        return $this->hasMany(Image::class, ['id' => 'image_id'])->via('imageCategories');
    }
}
