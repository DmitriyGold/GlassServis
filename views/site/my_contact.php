<?php
/* @var $this yii\web\View */

use yii\helpers\Html;
use yii\helpers\Url;

$this->title = 'Контакты';
?>

<div class="container-fluid">
    <div class="border"></div>

    <div class="site-contact">

        <div class="container my-5">
            <div class="row">
                <div class="col-12 col-lg-3 caption-2">
                    <div class=""><?= Html::encode($this->title) ?></div>
                </div>
                <div class="col-12 col-lg-8 line-bottom-1">              
                </div>
            </div>
        </div>

        <div class="container">
            <?php foreach ($model as $key => $value) { ?>

                <div class="row border-bottom">
                    <strong><i><?= $value['title'] ?></i></strong>
                </div>
                <div class="row mb-4">
                    <?= $value['detailed_text'] ?>
                </div>
            <?php } ?>    
        </div>

        <div class="container">
            <div class="line-bottom-1 my-5">
            </div>
        </div>

        <div class="container my-5">
            <div class="row">
                <div class="col-12 col-lg-6 p-4" style="overflow: hidden;">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2246.870447324904!2d37.39730921625862!3d55.72600358054618!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x46b54efb03fd66e3%3A0x8cda621dd6e7d263!2z0JHQpiDCq9CT0YDQsNC90LQg0KHQtdGC0YPQvdGMINCf0LvQsNC30LDCuw!5e0!3m2!1sru!2sru!4v1612445545347!5m2!1sru!2sru" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0">
                    </iframe></div>
                <div class="col-12 col-lg-6 p-4" style="overflow: hidden;">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6230.635066468712!2d36.55317331251174!3d56.48736118248534!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4151d3787aa68b91%3A0xe32285e05546e537!2z0K3QuSDQlNC20Lgg0KHQuCDQpNC70Y3RgiDQk9C70LDRgdGBINCa0LvQuNC9!5e0!3m2!1sru!2sru!4v1612445827164!5m2!1sru!2sru" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0">
                    </iframe>                    
                </div>
            </div>
        </div>

    </div>
</div>













