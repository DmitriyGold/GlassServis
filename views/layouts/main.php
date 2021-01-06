<?php
/* @var $this \yii\web\View */
/* @var $content string */

use app\widgets\Alert;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;
use yii\helpers\Url;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
    <head>
        <meta charset="<?= Yii::$app->charset ?>">

        <meta name="keywords" content="закаленное стекло москва, пожаростойкое стекло москва, ударопрочное стекло">
        <meta name="author" content="Золотов Дмитрий Сергеевич">
        <meta name="description" content="Гласс сервис">


        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <?php $this->registerCsrfMetaTags() ?>
        <title><?= Html::encode($this->title) ?></title>

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
              integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
              <?php $this->head() ?>

        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,400;0,500;0,800;1,400;1,500;1,800&display=swap"              
              rel="stylesheet">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,400;0,500;0,600;0,800;1,400;1,500;1,600;1,800&display=swap" 
              rel="stylesheet">

    </head>
    <body>
        <?php $this->beginBody() ?>

        <div class="wrap">

            <div class="header container-fluid">

                <div class="row header-top align-items-center pb-2 pb-md-0 text-center">
                    <div class="col-12 col-md-2  text-md-right">XXXXXX@mail.ru</div>
                    <div class="col-12 col-md-7 text-center text-md-right border-right border-secondary block-phone">
                        +7 964-123-4567, +7 (495) 123-45-67
                    </div>
                    <div class="col-12 col-md-3  text-md-left">вход/регистрация</div>
                </div>

                <div class="row header-bottom align-items-center pb-2">
                    <nav class="navbar col-12 col-lg-10 navbar-expand-lg navbar-light px-4  justify-content-end">
                        <div class="navbar-brand m-0 col-12 col-lg-2 text-center text-lg-left">логотип. 
                            <strong>Гласс Сервис</strong>
                        </div>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggler1"
                                aria-controls="navbarToggler1" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>

                        <div class="collapse navbar-collapse justify-content-end col-12 col-lg-10" id="navbarToggler1">
                            <div class="navbar-nav text-center text-lg-right">
                                <a class="nav-link active" href="#">Главная</a>
                                <a class="nav-link" href="#">О компании</a>
                                <div>
                                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                                        Продукция</a>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="#">Закаленное стекло</a>
                                        <a class="dropdown-item" href="#">Пожаростойкое стекло</a>
                                        <a class="dropdown-item" href="#">xxxxxxxxxxxxx</a>
                                        <div class="dropdown-divider"></div>
                                        <a class="dropdown-item" href="#">xxxxxxxxxxx</a>
                                    </div>
                                </div>

                                <div>
                                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Услуги</a>
                                    <div class="dropdown-menu">
                                        <a class="dropdown-item" href="#">Закалка</a>
                                        <a class="dropdown-item" href="#">Резка в размер</a>
                                        <a class="dropdown-item" href="#">Полировка</a>
                                        <a class="dropdown-item" href="#">Шлифовка</a>
                                        <a class="dropdown-item" href="#">Фацет</a>
                                    </div>
                                </div>

                                <a class="nav-link" href="#">Вакансии</a>
                                <a class="nav-link" href="#">Контакты</a>
                            </div>
                        </div>
                    </nav>

                    <div class="col-12 col-lg-2 text-center">
                        <a href="<?= Url::to(['/site/xxx']); ?>">
                            <button type="button" class="btn header-btn mb-1">
                                <i class="fa fa-phone" aria-hidden="true" style="color: #fff;"></i> 
                                заказать звонок</button>
                        </a> 
                    </div>
                </div>

            </div>

            <div class="container">
                <?=
                Breadcrumbs::widget([
                    'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
                ])
                ?>
                <?= Alert::widget() ?>
                <?= $content ?>
            </div>
        </div>

        <footer class="footer">
            <div class="container">
                <p class="pull-left">&copy; Гласс Сервис <?= date('Y') ?></p>

                <p class="pull-right"><?= Yii::powered() ?></p>
            </div>
        </footer>

        <?php $this->endBody() ?>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" 
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" 
        integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    </body>
</html>
<?php $this->endPage() ?>
