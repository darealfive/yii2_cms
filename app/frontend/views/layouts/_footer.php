<?php

use yii\helpers\Html;

?>
<hr class="mt-5">

<ul class="nav justify-content-center">
    <li class="nav-item">
        <a class="nav-link active" href="#">facebook</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="#">modelkartei</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="#">500px</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="#">instagram</a>
    </li>
</ul>

<footer class="footer">
    <p class="text-right">&copy; <?= Html::encode(Yii::$app->name) ?> <?= date('Y') ?></p>
</footer>