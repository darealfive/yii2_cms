<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model \backend\models\Agb */

$this->title                   = 'Create Agb';
$this->params['breadcrumbs'][] = ['label' => 'Agbs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="agb-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>