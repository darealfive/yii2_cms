<?php

namespace backend\models;

class Disclaimer extends \common\models\Disclaimer
{
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
}