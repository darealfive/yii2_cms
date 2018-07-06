<?php

namespace common\models;

use yii\db\Expression;
use yii\db\ActiveRecord as BaseActiveRecord;
use yii\behaviors\TimestampBehavior;

/**
 * Class CmsActiveRecord
 *
 * @package app\modules\cms\components
 * @property string $updated_at
 */
class ActiveRecord extends BaseActiveRecord
{
    public function behaviors()
    {
        return array_merge(
            parent::behaviors(),
            [
                [
                    'class'              => TimestampBehavior::class,
                    'createdAtAttribute' => false,
                    'value'              => new Expression('NOW()'),
                ]
            ]
        );
    }
}