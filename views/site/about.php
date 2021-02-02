<?php
/* @var $this yii\web\View */

use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\Breadcrumbs;
use app\widgets\ImgWidget;

$this->title = 'О нас';
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
    <div class="site-about">

        <div class="img1"></div>         
        <div class="container">
            <div class="about-top">
                <div class="container">
                    <div class="title line-bottom-2"><strong><?= Html::encode($this->title) ?></strong></div>

                    <div class="info p-3 shadow">Компания <span class="block-text1">«Гласс Сервис»</span> была создана в 2020 г. 
                        группой единомышленников, имеющих за плечами многолетний опыт работы в стекольной отрасли.
                        <br><br>Мы молодая, перспективная и быстро развивающаяся компания на стекольном рынке Москвы и МО.
                    </div>            
                </div>
            </div>
        </div>

        <div class="about-center">
            <div class="container my-5">
                <div class="row">
                    <div class="col">
                        Производственная площадка ООО "Гласс Сервис" размещена в подмосковном городе Клин на территории 
                        стекольного завода <strong>AGC</strong>, одного из мировых лидеров производителей листового float-стекла.
                        Территориальное соседство с японским концерном позволяет нам выполнять любые объемные 
                        заказы точно всрок и по ценам ниже средних.
                    </div>
                </div>
                <div class="line-bottom-1 my-5"></div>
            </div>

            <div class="container my-5">
                <div class="row text-center">
                    <div class="col">
                        <h2 class="block-text2">МЫ ПРЕДЛАГАЕМ:</h2>
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
                <div class="col-11 col-lg-3 shadow2  text-center pt-5">
                    <strong>огнеупорное стекло</strong>
                </div>
            </div>

            <div class="container"><div class="line-bottom-1 my-5"></div></div>


            <div class="container my-5">
                <div class="row text-center  my-5">
                    <div class="col">
                        Компания "Гласс Сервис" располагает новым современным стеклообрабатывающем оборудование 
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
            </div>

            <div class="row justify-content-center align-items-center px-5">
                <?php
                echo ImgWidget::widget([
                    'imagePath' => '@web/images/about/IMG_20210130_142122.jpg',
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
                    'imagePath' => '@web/images/about/IMG_20210130_143055.jpg',
                ]);
                ?>

            </div>

            <div class="container my-5">
                <div class="row text-center">
                    <div class="col">
                        <h2 class="block-text2">НАШЕ ПРЕИМУЩЕСТВО:</h2>
                    </div>
                </div>             
            </div>

        </div>
    </div>
</div>









North Glass - высокопроизводительная печь закаливания плоского и гнутого стекла.
с системой двусторонней принудительной конвекции решетчатого расположения.



