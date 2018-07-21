<?php

namespace common\models;

use yii\db\ActiveQuery;

/**
 * This is the model class for table "category_image".
 *
 * @property int      $category_id
 * @property int      $image_id
 * @property int      $sort
 *
 * The followings are the available model relations:
 * @property Category $category
 * @property Image    $image
 */
abstract class CategoryImage extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'category_image';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['category_id', 'image_id', 'sort'], 'required'],
            [['category_id', 'image_id', 'sort'], 'integer'],
            [['category_id', 'image_id'], 'unique', 'targetAttribute' => ['category_id', 'image_id']],
            [['category_id'], 'exist', 'skipOnError' => true, 'targetClass' => Category::class,
             'targetAttribute'                       => ['category_id' => 'id']],
            [['image_id'], 'exist', 'skipOnError' => true, 'targetClass' => Image::class,
             'targetAttribute'                    => ['image_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'category_id' => 'Category ID',
            'image_id'    => 'Image ID',
            'sort'        => 'Sort',
        ];
    }

    /**
     * @return ActiveQuery
     */
    public function getCategory()
    {
        return $this->hasOne(Category::class, ['id' => 'category_id']);
    }

    /**
     * @return ActiveQuery
     */
    public function getImage()
    {
        return $this->hasOne(Image::class, ['id' => 'image_id']);
    }
}
