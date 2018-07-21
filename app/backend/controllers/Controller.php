<?php

namespace backend\controllers;

use yii\filters\AccessControl;

/**
 * Class SiteController
 *
 * @package backend\controllers
 */
abstract class Controller extends \common\controllers\Controller
{
    public $layout = 'sb-admin-2';

    public function behaviors()
    {
        return array_merge(parent::behaviors(), array(
            'access' => [
                'class' => AccessControl::class,
                'rules' => [
                    [
                        'allow' => true,
                        'roles' => ['@']
                    ],
                ],
            ],
        ));
    }

    public function getMenu()
    {
        return [
            [
                'label' => 'AGB',
                'url'   => ['agb/index'],
                'icon'  => 'fa fa-book fa-fw',
            ],
            [
                'label' => 'Haftungsausschluss',
                'url'   => ['disclaimer/index'],
                'icon'  => 'fa fa-book fa-fw',
            ],
            [
                'label' => 'Navigation',
                'url'   => ['navigation/index'],
                'icon'  => 'fa fa-bars fa-fw',
            ],
            [
                'label' => 'Bilder',
                'url'   => ['image/index'],
                'icon'  => 'fa fa-image fa-fw',
            ],
        ];
    }
}
