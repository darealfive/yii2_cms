<?php

namespace common\models;

use yii\db\Expression;
use yii\db\ActiveRecord as BaseActiveRecord;
use yii\behaviors\TimestampBehavior;

/**
 * Class CmsActiveRecord
 *
 * @package app\modules\cms\components
 * @property string $created_at
 * @property string $updated_at
 */
abstract class ActiveRecord extends BaseActiveRecord
{
    public function behaviors()
    {
        return array_merge(
            parent::behaviors(),
            [
                [
                    'class' => TimestampBehavior::class,
                    'value' => new Expression('NOW()'),
                ]
            ]
        );
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }
}