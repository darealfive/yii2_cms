<?php

namespace backend\models;

class Image extends \common\models\Image
{
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
}