<?php

namespace frontend\assets;

use yii\web\AssetBundle;
use yii\bootstrap4\BootstrapAsset;
use yii\web\YiiAsset;

/**
 * Main frontend application asset bundle.
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';

    public $baseUrl = '@web';

    public $css = [
        'css/site.css',
        'css/main_test.css',
    ];

    public $js = [
        'js/main_test.js',
    ];

    public $depends = [
        YiiAsset::class,
        BootstrapAsset::class,
        LtIE9Asset::class
    ];
}
