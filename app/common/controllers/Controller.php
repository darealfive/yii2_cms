<?php

namespace common\controllers;

/**
 * Class SiteController
 *
 * @package common\controllers
 *
 * @property string $pageHeader
 */
abstract class Controller extends \yii\web\Controller
{
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
        ];
    }

    public function getPageHeader()
    {
        return ucfirst($this->id);
    }
}
