<?php
/* @var $this yii\web\View */

use yii\helpers\Html;
use yii\helpers\Url;
use app\widgets\ImgWidget;
use app\widgets\Img_fullWidget;

$this->title = 'Закаленное стекло';
//$this->params['breadcrumbs'][] = $this->title;
?>

<div class="container">
    <?php
    // Breadcrumbs::widget([
    //     'homeLink' => ['label' => 'Главная', 'url' => '/course', 'class' => 'mx-2 text-center',],
    //     'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
    // ])
    ?>
</div>

<div class="container-fluid">
    <div class="site-zakal">

        <div class="img1"></div>         
        <div class="container">
            <div class="about-top">
                <div class="container ">
                    <div class="caption-3 line-bottom-2"><strong><?= Html::encode($this->title) ?></strong></div>

                    <div class="info p-3 shadow text-center">Компания <strong>«Гласс Сервис»</strong> была создана в 2020 г. 
                        группой единомышленников, имеющих за плечами многолетний опыт работы в стекольной отрасли.
                        <br><br>Мы молодая, перспективная и быстро развивающаяся компания на стекольном рынке Москвы и МО.
                    </div>            
                </div>
            </div>
        </div>

        <div class="about-center ">
            <div class="container my-5">
                <div class="row">
                    <div class="col  text-center">
                        Производственная площадка <strong>OOO «Гласс Сервис»</strong> размещена в подмосковном городе Клин на территории 
                        стекольного завода <img src="<?= Url::to('@web/images/AGС_logo.png'); ?>" width="73px;" alt="#">, одного из мировых лидеров производителей листового float-стекла.
                        Территориальное соседство с японским концерном позволяет нам выполнять любые объемные 
                        заказы точно всрок и по ценам ниже средних.
                    </div>
                </div>                
            </div>

            <div class="container my-5">
                <div class="row">
                    <div class="col-12 col-lg-4 caption-2">
                        <div class="">МЫ ПРЕДЛАГАЕМ:</div>
                    </div>
                    <div class="col-12 col-lg-7 line-bottom-1">              
                    </div>
                </div>
            </div>

            <div class="row justify-content-around align-self-center mb-5">
                <div class="col-11 col-lg-3 shadow2 text-center">
                    <strong>полный цикл промышленной переработки листового стекла:</strong><br>
                    резка, обработка кромки, сверление отверстий, зенковка, выпил  в стекле технологических отверстий
                </div>
                <div class="col-11 col-lg-3 shadow2 text-center pt-2">
                    производство 
                    <strong>закаленного</strong> стекла для
                    фасадов зданий, офисных перегородок, стеклянной мебели, торгового оборудования 
                </div>
                <div class="col-11 col-lg-3 shadow2  text-center pt-5 mb-5">
                    <strong>огнеупорное стекло</strong>
                </div>
            </div>

            <div class="container my-5">

                <div class="row">
                    <div class="col-12 col-lg-7 caption-2">
                        <div class="">ПАРК НАШЕГО ОБОРУДОВАНИЯ:</div>
                    </div>
                    <div class="col-12 col-lg-4 line-bottom-1">              
                    </div>
                </div>

                <div class="row text-center mt-5">
                    <div class="col">
                        Компания <strong>«Гласс Сервис»</strong> располагает новым современным стеклообрабатывающем оборудование 
                        итальянской фирмы <strong>Intermac</strong>:                     
                    </div>
                </div> 

                <div class="row my-5">
                    <div class="col">
                        <ul>
                            <li>линия для двусторонней обработки кромки Busetti F10</li>
                            <li>обрабатывающий центр с ЧПУ Master 33.3</li>
                            <li>стол раскроя стекла с ЧПУ для прямолинейного и фигурного раскроя монолитного стекла Genius RS-A</li>
                            <li>стол раскроя триплекса Genius 37 LM</li>
                            <li>комбинированные линии по обработке стекла Genius CT-A</li>
                        </ul>
                    </div>
                </div> 
                <div class="row text-center  mt-5">
                    <div class="col">
                        Горизонтальная мойка с инновационной системой Ecosave от компании Neptun 
                        <strong>Tornado HP</strong>.                     
                    </div>
                </div> 
            </div>

            <div class="row justify-content-center align-items-center px-5">
                <?php
                echo ImgWidget::widget([
                    'imagePath' => '@web/images/about/IMG_20210130_143055.jpg',
                ]);
                echo ImgWidget::widget([
                    'imagePath' => '@web/images/about/IMG_20210130_142641.jpg',
                ]);
                echo ImgWidget::widget([
                    'imagePath' => '@web/images/about/IMG_20210130_142139.jpg',
                ]);
                echo ImgWidget::widget([
                    'imagePath' => '@web/images/about/IMG_20210130_142545.jpg',
                ]);
                echo ImgWidget::widget([
                    'imagePath' => '@web/images/about/IMG_20210130_142939.jpg',
                ]);
                echo ImgWidget::widget([
                    'imagePath' => '@web/images/about/IMG_20210130_142122.jpg',
                ]);
                ?>
            </div>

            <div class="container my-5">
                <div class="row text-center mt-5">
                    <div class="col">
                        Закалка и моллирование стекла осуществляется на высокопроизводительной печи North Glass.                        
                    </div>
                </div> 
            </div>

            <div class="row justify-content-center my-5 px-5" >
                <?=
                Img_fullWidget::widget([
                    'imagePath' => '@web/images/about/IMG_20210130_143527.jpg',
                ])
                ?>
            </div>
        </div>

        <div class="container">
            <div class="info p-3 shadow my-5 text-center">
                Компания <strong>"Гласс Сервис"</strong> заинтересована в выстраивании 
                долгосрочных взаимоотношений с <strong>В2В</strong> партнерами.
            </div>           
        </div>

        <div class="container my-5">
            <div class="row text-center">
                <div class="col">
                    <strong>Остались вопросы? Задайте их нашему специалисту!</strong>
                </div>
            </div>
            <div class="row justify-content-center mt-4">
                <div class="col-12 col-md-3 text-center mb-3">
                    <a href="<?= Url::to(['#']); ?>">
                        <button type="button" class="btn my-btn mb-1">
                            <i class="fa fa-phone" aria-hidden="true" style="color: #ccc;"></i> 
                            написать письмо</button>
                    </a> 
                </div>
            </div>
        </div>
    </div>
</div>

