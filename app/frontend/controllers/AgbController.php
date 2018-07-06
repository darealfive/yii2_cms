<?php

namespace frontend\controllers;

use frontend\models\Agb;

class AgbController extends Controller
{
    public function actionIndex()
    {
        return $this->render('index', [
            'model' => Agb::find()->one()
        ]);
    }
}
