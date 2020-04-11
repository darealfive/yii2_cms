<?php
/* @var $this \yii\web\View */

use yii\helpers\Url;

$style = 'style="position:absolute; width:100%; left:0;"';
?>
<h1 class="text-center mt-5"><span class="wine-red">uschi schmidt</span> <span class="bright-grey">FOTOGRAFIE</span>
</h1>
<hr>

<div class="row mb-5">
    <div class="col-md-10 offset-md-1">

        <nav class="navbar navbar-expand-md navbar-light bg-transparent">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#mainNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="navbar-collapse collapse" id="mainNavbar">
                <ul class="navbar-nav nav-fill w-100">
                    <li class="nav-item">
                        <a class="nav-link" href="<?= Url::to('/site/index') ?>">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= Url::to('/gallery/index') ?>">Galerie</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" data-toggle="collapse" data-target="#wedding">Hochzeit</a>
                        <div class="collapse" id="wedding">
                            <ul class="navbar-nav nav-fill w-100">
                                <li class="nav-item">
                                    <a class="nav-link" href="<?= Url::to('/site/index') ?>">home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Ich bins, die Uschi</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Link</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Ein-langer-Link</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" data-toggle="collapse" data-target="#free_work">Freie arbeiten</a>
                        <div class="collapse" id="free_work">
                            <ul class="navbar-nav nav-fill w-100">
                                <li class="nav-item">
                                    <a class="nav-link" href="<?= Url::to('/site/index') ?>">home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Ich bins, die Uschi</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Link</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Link2</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Link3</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Ein-langer-Link</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Impressum</a>
                    </li>
                </ul>
            </div><!--/.navbar-collapse -->
        </nav>

    </div>
</div>
