<?php

namespace frontend\assets;

use yii\web\AssetBundle, yii\web\View;

/**
 * Class LtIE9Asset
 *
 * @package frontend\assets
 */
class LtIE9Asset extends AssetBundle
{
    public $js = [
        'https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js',
        'https://oss.maxcdn.com/respond/1.4.2/respond.min.js'
    ];

    public $jsOptions = [
        'condition' => 'lte IE9',
        'position'  => View::POS_HEAD
    ];
}
