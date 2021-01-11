<?php
/* @var $this yii\web\View */

$this->title = 'Гласс Сервис';

use yii\helpers\Html;
use yii\helpers\Url;
use app\widgets\CardWidget;
?>
<div class="site-index">
    <div class="body-content">


        <div class="row mt-5 text-center">
            <div class="col">
                <p><span class="my-h1 my-5">Изготавливаем стекло любой сложности под заказ.</span></p>

                <p><span class="my-h2 my-5">Виды обработки стекла: <br>
                        закалка, технологические вырезы, моллирование, сверление, зенковка, фацет, 
                        шлифовка и европолировка кромки.
                    </span></p>
            </div>
        </div>

        <div class="container my-5">
            <div class="block-3px mt-4"></div>
        </div>

        <div>
            <div  class="parallax2">
            </div>
            <div class="row paralax2-content text-center">
                <div class="col-12 px-2">
                    <strong>Печь по закалке стекла NorthGlass.</strong>                
                </div>
                <div class="col-12 px-2 cont2"><strong>Новая система контроля температуры 
                        значительно повышают эффективность производства и качество закалки
                        стекла</strong>
                </div>
            </div>

            <div class="container">
                <div class="news container-fluid my-4">

                    <div class="row text-center my-5">
                        <div class="col">Новостной блок (присутствует если есть новости)</div>
                    </div>

                    <div class="row text-center px-5">
                        <!-- Блок объявления. начало-->
                        <?php if (!empty($news)) { ?>
                            <?php foreach ($news as $value) { ?>
                                <div class="col-6 text-center py-2">
                                    <h4><strong><?= $value['title'] ?></strong></h4>
                                    <div class="container">
                                        <p><?= $value['short_text'] ?></p>
                                    </div>
                                </div>
                            <?php } ?>

                            <div class="col-12 text-center align-self-end pt-2">
                                <?php $options = ['style' => ['color' => '#888']]; ?>
                                <?= Html::a('подробнее <i class="fa fa-angle-double-right" aria-hidden="true"></i>', ['#'], $options) ?>
                            </div>                 
                        <?php } ?>
                        <!-- Блок объявления. конец-->
                    </div>
                </div>
            </div>

            <div class="container my-5">
                <div class="block-3px mt-4"></div>
            </div>


            <div  class="parallax3">
            </div>
            <div class="row paralax3-content text-center">
                <div class="col-12 px-2">
                    <strong>Линия Busetti F серии для двусторонней обработки кромки.</strong>                
                </div>
            </div>

            <div class="row text-center" id="servise1">
                <div class="col-12 my-5"><h2>Продукция</h2></div>
            </div>

            <div class="container-fluid  my-background-col">
                <div class="container">
                    <div class="row justify-content-center py-5">
                        <?php
                        foreach ($services_1 as $value) {

                            echo CardWidget::widget([
                                'sitePage' => $value['sitePage'],
                                'title' => $value['title'],
                                'description' => $value['description'],
                                'imagePath' => $value['imagePath'],
                            ]);
                        }
                        ?>
                    </div>
                </div>
            </div>

            <div class="container my-5">
                <div class="block-3px mt-4"></div>
            </div>

            <div class="row text-center" id="servise2">
                <div class="col-12 my-5"><h2>Услуги</h2></div>
            </div>

            <div class="container-fluid  my-background-col">
                <div class="container">
                    <div class="row justify-content-center py-5">
                        <?php
                        foreach ($services_2 as $value) {

                            echo CardWidget::widget([
                                'sitePage' => $value['sitePage'],
                                'title' => $value['title'],
                                'description' => $value['description'],
                                'imagePath' => $value['imagePath'],
                            ]);
                        }
                        ?>
                    </div>
                </div>
            </div>

            <div class="container my-5">
                <div class="block-3px mt-4"></div>
            </div>

            <div class="container">
                <div class="row text-center my-5">
                    <div class="col">Блок с акциями(присутствует если они есть)</div>
                </div>

                <div class="row justify-content-center" >

                    <?php $i = 0 ?> <!-- организация счетчика акций, покажем только 3 последние-->
                    <?php foreach ($promotions as $value) { ?>
                        <div class="col-12 col-xl-4 my-2">
                            <div class="shadow bg-white rounded wrapper-card mx-auto">
                                <div class="wrapper-card-top">
                                    <div class="wrapper-card-img">
                                        <?php if (!empty($value['imagePath'])) { ?>
                                            <img src="<?= Url::to('@web/uploads/promotions/' . $value['imagePath']) ?>" alt="картинка к акции"  
                                                 style="width: 100%;">
                                             <?php } else { ?>
                                            <img src="<?= Url::to('@web/images/noImage.jpg') ?>" alt="картинка к акции"  
                                                 style="width: 100%;">
                                             <?php } ?>
                                    </div> 
                                    <div class="wrapper-card-data text-right pr-2">
                                        <i class="fa fa-calendar" aria-hidden="true"></i>
                                        <span><strong>с <?= $value['dateStart'] ?> по <?= $value['dateEnd'] ?></strong></span> 
                                    </div>
                                </div>

                                <div class="text-center wrapper-card-content">
                                    <h6 class="my-2" style="color: #79A62F;"><?= mb_strtoupper($value['title'], 'UTF-8') ?></h6>
                                    <p class="my-1"><i><?= nl2br($value['short_text']) ?></i></p>
                                </div>
                            </div>  
                            <div class="text-center align-self-end pt-2">
                                <?php $options = ['style' => ['color' => '#888']]; ?>
                                <?= Html::a('подробнее <i class="fa fa-angle-double-right" aria-hidden="true"></i>', ['promotion', 'id' => $value['id']], $options) ?>
                            </div>
                        </div>

                        <?php
                        $i++;
                        if ($i === 3)
                            break;
                    }
                    ?>
                </div>

                <div class="container my-5">
                    <div class="block-3px mt-4"></div>
                </div>

            </div>
        </div>
