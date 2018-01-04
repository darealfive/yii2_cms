<?php

/* @var $this \yii\web\View */

/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use backend\assets\SbAdmin2Asset;
use backend\widgets\SBAdmin2Menu;

SbAdmin2Asset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="">
    <meta name="author" content="">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<div id="wrapper">
    <?php
    NavBar::begin([
        'brandLabel'           => 'My Company',
        'brandUrl'             => Yii::$app->homeUrl,
        'renderInnerContainer' => false,
        'containerOptions'     => ['tag' => false],
        'options'              => [
            'class' => 'navbar navbar-default navbar-static-top',
            'role'  => 'navigation',
            'style' => 'margin-bottom: 0'
        ],
    ]);
    echo Nav::widget([
        'options' => ['class' => 'navbar-right navbar-top-links'],
        'items'   => [
            ['label' => 'Home', 'url' => ['site/index']],
            Yii::$app->user->isGuest ? (
            ['label' => 'Login', 'url' => ['site/login']]
            ) : (
                '<li>'
                . Html::beginForm(['site/logout'], 'post')
                . Html::submitButton(
                    'Logout (' . Yii::$app->user->identity->username . ')',
                    ['class' => 'btn btn-link logout']
                )
                . Html::endForm()
                . '</li>'
            )
        ],
    ]); ?>

    <div class="navbar-default sidebar" role="navigation">
        <div class="sidebar-nav navbar-collapse">
            <?= SBAdmin2Menu::widget([
                'items'   => $this->context->menu,
                'options' => [
                    'id'    => 'side-menu',
                    'class' => 'nav in'
                ]
            ]); ?>
        </div>
    </div>

    <?php NavBar::end(); ?>

    <!-- Page Content -->
    <div id="page-wrapper">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header"><?= $this->context->pageHeader ?></h1>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <?= $content ?>
    </div>
    <!-- /#page-wrapper -->

</div>
<!-- /#wrapper -->

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
