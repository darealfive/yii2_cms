<?php

/* @var $this \yii\web\View */

/* @var $content string */

use yii\helpers\Html;
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

<div class="container-fluid">

    <?= $this->render('_top') ?>

    <div class="row">
        <div class="col-md-10 offset-md-1">
            <?= $content ?>

            <?= $this->render('_footer') ?>
        </div>
    </div>

</div><!--/.container -->

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
