<?php

/* @var $this \yii\web\View */

/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\NavBar;
use frontend\assets\AppAsset;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!doctype html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <!-- Required meta tags -->
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<div class="wrap">
    <?php
    NavBar::begin([
        'brandLabel'            => Yii::$app->name,
        'innerContainerOptions' => [
            'class' => 'container-fluid'
        ],
        'options'               => [
            'class' => 'navbar-default navbar-fixed-top',
        ],
    ]); ?>

    <div class="navbar-collapse collapse">
        <ul class="nav navbar-nav">
            <li><a href="#">Home</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#contact">Contact</a></li>
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown</a>
                <ul class="dropdown-menu" role="menu">
                    <li><a href="#">Action</a></li>
                    <li><a href="#">Another action</a></li>
                    <li><a href="#">Something else here</a></li>
                    <li><a href="#">Link</a></li>
                </ul>
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown 2</span></a>
                <ul class="dropdown-menu" role="menu">
                    <li><a href="#">Dropdown 2 Child 1hgffgfgjfgjfgjfgjfgjj</a></li>
                    <li><a href="#">Dropdown 2 Child 2</a></li>
                    <li><a href="#">Dropdown 2 Child 3</a></li>
                    <li><a href="#">Dropdown 2 Child 4</a></li>
                </ul>
        </ul>
    </div><!--/.nav-collapse -->

    <?php
    NavBar::end();
    ?>

    <div class="container-fluid">
        <?= $content ?>
    </div>
</div>

<footer class="footer">
    <div class="container">
        <p class="pull-right">&copy; <?= Html::encode(Yii::$app->name) ?> <?= date('Y') ?></p>
    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
