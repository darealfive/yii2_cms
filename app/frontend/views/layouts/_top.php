<?php
/* @var $this \yii\web\View */

use yii\helpers\Url;

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
                        <a class="nav-link" href="<?= Url::to('/site/index') ?>">home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= Url::to('/gallery/index') ?>">galery</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" data-toggle="collapse" data-target="#untermenu">untermenu</a>
                        <div class="collapse" id="untermenu">
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
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item">
                        <div class="dropdown">

                            <a class="nav-link" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                               href="#">Ich bins, die Uschi</a>
                            <div class="dropdown-menu" aria-labelledby="dLabel">
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
                                        <a class="nav-link" href="#">Link</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">Link</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">Link</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">Link</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Link</a>
                    </li>
                </ul>
            </div><!--/.navbar-collapse -->
        </nav>

    </div>
</div>
