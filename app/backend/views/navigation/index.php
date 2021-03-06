<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
use backend\models\Navigation;

/* @var $this yii\web\View */
/* @var $searchModel \backend\models\search\Navigation */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title                   = 'Navigations';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="navigation-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Navigation', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?php Pjax::begin(); ?>    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel'  => $searchModel,
        'columns'      => [
            ['class' => 'yii\grid\SerialColumn'],

            'id',
            'title:text',
            'parent.title:text:Parent Title',
            'created_at:datetime',
            'updated_at:datetime',

            [
                'class'          => 'yii\grid\ActionColumn',
                'visibleButtons' => [
                    'delete' => function (Navigation $model, $key, $index) {
                        return $model->getChildren()->count() == 0;
                    }
                ]
            ],
        ],
    ]); ?>
    <?php Pjax::end(); ?>
</div>