<?php

namespace common\models;

use yii\db\ActiveQuery;

/**
 * This is the model class for table "image_category".
 *
 * @property int      $image_id
 * @property int      $category_id
 * @property int      $sort
 *
 * The followings are the available model relations:
 * @property Category $category
 * @property Image    $image
 */
abstract class ImageCategory extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'image_category';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['image_id', 'category_id', 'sort'], 'required'],
            [['image_id', 'category_id', 'sort'], 'integer'],
            [['image_id', 'category_id'], 'unique', 'targetAttribute' => ['category_id', 'image_id']],
            [['image_id'], 'exist', 'skipOnError' => true, 'targetClass' => Image::class,
             'targetAttribute'                    => ['image_id' => 'id']],
            [['category_id'], 'exist', 'skipOnError' => true, 'targetClass' => Category::class,
             'targetAttribute'                       => ['category_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'image_id'    => 'Image ID',
            'category_id' => 'Category ID',
            'sort'        => 'Sort',
        ];
    }

    /**
     * @return ActiveQuery
     */
    public function getImage()
    {
        return $this->hasOne(Image::class, ['id' => 'image_id']);
    }

    /**
     * @return ActiveQuery
     */
    public function getCategory()
    {
        return $this->hasOne(Category::class, ['id' => 'category_id']);
    }
}
