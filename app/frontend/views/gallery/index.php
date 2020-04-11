<?php

/* @var $this yii\web\View */

$this->title = 'My Yii Application';
?>
<div class="gallery-index">

    <div id="carouselExampleIndicators" class="carousel slide carousel-fade" data-ride="false">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="//localhost:8100/images/gallery/980x380/001.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="//localhost:8100/images/gallery/980x380/002.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="//localhost:8100/images/gallery/980x380/003.jpg" class="d-block w-100" alt="...">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

</div>
