<?php

namespace backend\assets;

use yii\web\AssetBundle;

class SbAdmin2Asset extends AssetBundle
{
    public $baseUrl = '@web/sb-admin-2';

    public $css = [
        'vendor/metisMenu/metisMenu.css',
        YII_ENV_DEV ? 'dist/css/sb-admin-2.css' : 'dist/css/sb-admin-2.min.css',
        YII_ENV_DEV ? 'vendor/font-awesome/css/font-awesome.css' : 'vendor/font-awesome/css/font-awesome.min.css',
    ];

    public $js = [
        'vendor/metisMenu/metisMenu.js',
        YII_ENV_DEV ? 'dist/js/sb-admin-2.js' : 'dist/js/sb-admin-2.min.js'
    ];

    public $depends = [
        'backend\assets\AppAsset',
        'backend\assets\LtIE9Asset'
    ];
}