<?php

namespace common\models;

/**
 * This is the model class for table "disclaimer".
 *
 * @property int    $id
 * @property string $text
 */
class Disclaimer extends ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'disclaimer';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['text'], 'required'],
            [['text'], 'string'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return array_merge(parent::attributeLabels(), [
            'id'   => 'ID',
            'text' => 'Text',
        ]);
    }
}
