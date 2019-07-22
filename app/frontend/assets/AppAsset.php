<?php

namespace frontend\assets;

use yii\bootstrap4\BootstrapPluginAsset;
use yii\bootstrap4\BootstrapAsset;
use yii\web\AssetBundle;
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
    ];

    public $depends = [
        YiiAsset::class,
        LtIE9Asset::class,
        BootstrapAsset::class,
        BootstrapPluginAsset::class
    ];
}
