<?php

namespace backend\assets;

use yii\web\AssetBundle;
use yii\web\View;

class LtIE9Asset extends AssetBundle
{
    public $js = [
        'https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js',
        'https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js'
    ];

    public $jsOptions = [
        'condition' => 'lte IE9',
        'position'  => View::POS_HEAD
    ];
}
