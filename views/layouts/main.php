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
use app\models\db\Main;

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
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700&display=swap" 
              rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700&display=swap"
              rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


    </head>
    <body>
        <?php $this->beginBody() ?>

        <?php
        $main = Main::find()
                ->where(['hide' => 0])
                ->all();
        ?>

        <div class="wrap">
            <div class="header container-fluid">
                <div class="row header-top align-items-center py-2 text-center">
                    <div class="col-12 col-md-2 text-md-right pb-2 pb-md-0"><?= $main[0][text] ?></div>
                    <div class="col-12 col-md-7 text-center text-md-right border-right border-secondary block-phone pb-2 pb-md-0">
                        <?= $main[1][text] ?>, <?= $main[2][text] ?>
                    </div>
                    <div class="col-12 col-md-3  text-md-left">вход/регистрация</div>
                </div>

                <div class="row header-bottom align-items-center pb-2">
                    <nav class="navbar col-12 col-lg-10 navbar-expand-lg navbar-light px-4 justify-content-end">
                        <div class="navbar-brand m-0 col-12 col-lg-2 text-center text-lg-left">
                            <a href="<?= Url::to(['#']); ?>">
                                <img class="logo p-0 m-0" src="<?= Url::to('@web/logo/лого-07.svg') ?>" alt="Логотип">
                                <strong>Гласс Сервис</strong>
                            </a>
                        </div>
                        <?php
                        $model1 = 'end';
                        $model2 = 10;
                        echo $this->render('nav', compact('model1', 'model2'));
                        ?>
                    </nav>

                    <div class="col-12 col-lg-2 text-center">
                        <a href="<?= Url::to(['#']); ?>">
                            <button type="button" class="btn my-btn mb-1">
                                <i class="fa fa-phone" aria-hidden="true" style="color: #ccc;"></i> 
                                заказать звонок</button>
                        </a> 
                    </div>
                </div>            
            </div>

            <div class="container-fluid">
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
            <div class="container-fluid">
                <div class="row p-2 text-center">

                    <div class="col-12 col-lg-4 border-right">
                        <div class="navbar-brand py-4">
                            <a href="<?= Url::to(['#']); ?>">
                                <img class="logo p-0 m-0" src="<?= Url::to('@web/logo/лого-06.svg') ?>" alt="Логотип">
                                <strong>Гласс Сервис</strong>
                            </a>
                        </div>
                        <div class="address py-4"><?= $main[7][text] ?></div>
                        <div class="copywriter">
                            <p>&copy;<?= date('Y') ?>. Все права защищены.</p>
                        </div>
                    </div>

                    <div class="col-12 col-lg-8">
                        <div class="row flex-column">
                            <div class="col py-2 text-center d-none d-md-block">
                                <nav class="navbar navbar-expand-md navbar-inverse">
                                    <?php
                                    $model1 = 'center';
                                    $model2 = 12;
                                    echo $this->render('nav', compact('model1', 'model2'));
                                    ?>
                                </nav>
                            </div>
                            <div class="colpy-2">
                                <div class="row">
                                    <div class="col col-lg-8 block-phone">
                                        <?= $main[1][text] ?>, <?= $main[2][text] ?>
                                    </div>
                                    <div class="col col-lg-4">
                                        <a href="<?= Url::to(['#']); ?>">
                                            <button type="button" class="btn footer-btn mb-1">
                                                <i class="fa fa-phone" aria-hidden="true" style="color: #ccc;"></i> 
                                                заказать звонок</button>
                                        </a> 
                                    </div>
                                </div>
                            </div>

                            <div class="col pt-5 pb-2">
                                <a href="<?= Url::to(['#']); ?>">
                                    <img class="icon" src="<?= Url::to('@web/icon/Facebook.png') ?>" alt="Логотип">
                                </a>
                                <a href="<?= Url::to(['#']); ?>">
                                    <img class="icon" src="<?= Url::to('@web/icon/Instagram.png') ?>" alt="Логотип">
                                </a>
                                <a href="<?= Url::to(['#']); ?>">
                                    <img class="icon" src="<?= Url::to('@web/icon/Odnoklassniki.png') ?>" alt="Логотип">
                                </a>
                                <a href="<?= Url::to(['#']); ?>">
                                    <img class="icon" src="<?= Url::to('@web/icon/Twitter.png') ?>" alt="Логотип">
                                </a>
                                <a href="<?= Url::to(['#']); ?>">
                                    <img class="icon" src="<?= Url::to('@web/icon/VK.png') ?>" alt="Логотип">
                                </a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </footer>

        <?php $this->endBody() ?>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" 
        integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous">
        </script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js">
        </script>
        <script src="<?= Url::to('@web/js/common.js'); ?>">
        </script>
    </body>
    
</html>
<?php $this->endPage() ?>
