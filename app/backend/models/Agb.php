<?php

namespace backend\models;

class Agb extends \common\models\Agb
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