<?php

namespace common\controllers;

use yii\helpers\Inflector;

/**
 * Class SiteController
 *
 * @package common\controllers
 *
 * @property string $pageHeader readonly
 */
abstract class Controller extends \yii\web\Controller
{
    public function getPageHeader()
    {
        return Inflector::titleize($this->id);
    }
}
