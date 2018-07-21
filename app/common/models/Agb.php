<?php

namespace common\models;

/**
 * This is the model class for table "agb".
 *
 * @property int    $id
 * @property string $text
 */
abstract class Agb extends ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'agb';
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
