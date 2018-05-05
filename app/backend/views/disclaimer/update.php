<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model \backend\models\Disclaimer */

$this->title                   = 'Update Disclaimer: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Disclaimers', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="disclaimer-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>