<?php

namespace backend\controllers;

/**
 * Class SiteController
 *
 * @package backend\controllers
 */
abstract class Controller extends \common\controllers\Controller
{
    public $layout = 'sb-admin-2';

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
        ];
    }
}
