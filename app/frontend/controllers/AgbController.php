<?php

namespace frontend\controllers;

use frontend\models\Agb;

class AgbController extends \common\controllers\Controller
{
    public function actionIndex()
    {
        return $this->render('index', [
            'model' => Agb::find()->one()
        ]);
    }

}
