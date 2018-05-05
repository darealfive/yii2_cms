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
    public function getPageHeader()
    {
        return ucfirst($this->id);
    }
}
