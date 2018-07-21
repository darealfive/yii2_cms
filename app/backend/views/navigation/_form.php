<?php

use yii\helpers\Html;
use yii\helpers\ArrayHelper;
use yii\widgets\ActiveForm;
use kartik\select2\Select2;
use backend\models\Navigation;

/* @var $this yii\web\View */
/* @var $model backend\models\Navigation */
/* @var $form yii\widgets\ActiveForm */

$parents = Navigation::find()
    ->where(['parent_id' => null])
    ->andFilterWhere(['!=', 'id', $model->id])
    ->all();
$parents = ArrayHelper::map($parents, 'id', 'title');
?>

<div class="navigation-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'title')->textInput(); ?>

    <?= $form->field($model, 'parent_id')->widget(Select2::class, [
        'data'          => $parents,
        'options'       => [
            'options' => [
                'placeholder' => 'Select a navigation ...'
            ],
        ],
        'pluginOptions' => [
            'allowClear' => true
        ],
    ]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update',
            ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>