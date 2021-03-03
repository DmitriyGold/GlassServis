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
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700&display=swap" 
              rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Raleway:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700&display=swap"
              rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    </head>
    <body>
        <?php $this->beginBody() ?>

        <div class="wrap">
            <div class="header container-fluid">
                <div class="row header-top align-items-center py-2 text-center">
                    <div class="col-12 col-md-2 text-md-right pb-2 pb-md-0">ds_zolotov@mail.ru</div>
                    <div class="col-12 col-md-7 text-center text-md-right border-right border-secondary block-phone pb-2 pb-md-0">
                        +7 964-632-1620
                    </div>
                    <div class="col-12 col-md-3  text-md-left">вход/регистрация</div>
                </div>

                <div class="row header-bottom align-items-center pb-2 border-bottom mb-5">
                    <nav class="navbar col-12 col-lg-10 navbar-expand-lg navbar-light px-4 justify-content-start">
                            <div class="wrap-svg2 justify-content-center">
                                <div class="col-12">
                                    <a href="<?= Url::to(['/site/index']); ?>">
                                        <svg id="Слой_1" data-name="Слой 1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 1053.96 1689.19"><defs><style>.cls-1{fill:url(#Безымянный_градиент_69);}.cls-2{fill:url(#Безымянный_градиент_77);}.cls-3{fill:url(#Безымянный_градиент_69-2);}.cls-4{fill:url(#Безымянный_градиент_137);}.cls-5{fill:url(#Безымянный_градиент_85);}.cls-6{fill:url(#Безымянный_градиент_76);}.cls-7{fill:#36758b;}.cls-8{fill:url(#Безымянный_градиент_123);}.cls-9{fill:url(#Безымянный_градиент_136);}.cls-10{fill:url(#Безымянный_градиент_121);}.cls-11{fill:url(#Безымянный_градиент_134);}.cls-12{fill:url(#Безымянный_градиент_77-2);}.cls-13{fill:url(#Безымянный_градиент_69-3);}.cls-14{fill:url(#Безымянный_градиент_113);}.cls-15{fill:url(#Безымянный_градиент_85-2);}.cls-16{fill:url(#Безымянный_градиент_86);}</style><linearGradient id="Безымянный_градиент_69" x1="258.16" y1="795.45" x2="348.8" y2="795.45" gradientUnits="userSpaceOnUse"><stop offset="0" stop-color="#26b3ac"/><stop offset="0.81" stop-color="#26b3ac"/></linearGradient><linearGradient id="Безымянный_градиент_77" x1="227.33" y1="940.84" x2="531.22" y2="974.5" gradientUnits="userSpaceOnUse"><stop offset="0" stop-color="#2ba1a2"/><stop offset="0.05" stop-color="#2e939b"/><stop offset="0.11" stop-color="#318996"/><stop offset="0.13" stop-color="#308c98"/><stop offset="0.52" stop-color="#26b3ac"/><stop offset="0.67" stop-color="#26b3ac"/><stop offset="1" stop-color="#59f8df"/></linearGradient><linearGradient id="Безымянный_градиент_69-2" x1="506.28" y1="948.91" x2="596.92" y2="948.91" xlink:href="#Безымянный_градиент_69"/><linearGradient id="Безымянный_градиент_137" x1="402.61" y1="933.53" x2="620.14" y2="898.74" gradientUnits="userSpaceOnUse"><stop offset="0.04" stop-color="#2ba1a2"/><stop offset="0.2" stop-color="#2e939b"/><stop offset="0.37" stop-color="#318996"/><stop offset="0.58" stop-color="#26b3ac"/><stop offset="0.96" stop-color="#59f8df"/></linearGradient><linearGradient id="Безымянный_градиент_85" x1="471.22" y1="1128.08" x2="512.16" y2="896.89" gradientUnits="userSpaceOnUse"><stop offset="0.04" stop-color="#2ba1a2"/><stop offset="0.2" stop-color="#2e939b"/><stop offset="0.37" stop-color="#318996"/><stop offset="0.65" stop-color="#26b3ac"/><stop offset="0.85" stop-color="#59f8df"/></linearGradient><linearGradient id="Безымянный_градиент_76" x1="188.44" y1="973.31" x2="512.14" y2="1010.08" gradientUnits="userSpaceOnUse"><stop offset="0" stop-color="#2ba1a2"/><stop offset="0.01" stop-color="#4baeaf"/><stop offset="0.04" stop-color="#88c8ca"/><stop offset="0.06" stop-color="#b5dbdd"/><stop offset="0.08" stop-color="#d1e7e9"/><stop offset="0.08" stop-color="#dbebed"/><stop offset="0.37" stop-color="#318996"/><stop offset="0.72" stop-color="#26b3ac"/><stop offset="0.95" stop-color="#59f8df"/></linearGradient><linearGradient id="Безымянный_градиент_123" x1="342.33" y1="933.57" x2="441.04" y2="665.99" gradientUnits="userSpaceOnUse"><stop offset="0" stop-color="#336d81"/><stop offset="0.33" stop-color="#26b3ac"/><stop offset="0.62" stop-color="#3cd1c2"/><stop offset="1" stop-color="#338192"/></linearGradient><linearGradient id="Безымянный_градиент_136" x1="374.02" y1="471.58" x2="736.76" y2="511.77" gradientUnits="userSpaceOnUse"><stop offset="0" stop-color="#26b3ac"/><stop offset="0.8" stop-color="#36758b"/><stop offset="1" stop-color="#abc5ce"/></linearGradient><linearGradient id="Безымянный_градиент_121" x1="297" y1="524.33" x2="684.81" y2="524.33" gradientUnits="userSpaceOnUse"><stop offset="0" stop-color="#36758b"/><stop offset="0.08" stop-color="#c4d6dd"/><stop offset="0.51" stop-color="#26b3ac"/><stop offset="0.68" stop-color="#17b6c5"/><stop offset="1" stop-color="#338192"/></linearGradient><linearGradient id="Безымянный_градиент_134" x1="628.5" y1="598.5" x2="680.52" y2="545.22" gradientUnits="userSpaceOnUse"><stop offset="0.08" stop-color="#336d81"/><stop offset="0.33" stop-color="#26b3ac"/><stop offset="0.6" stop-color="#31c2b7"/><stop offset="0.94" stop-color="#338192"/></linearGradient><linearGradient id="Безымянный_градиент_77-2" x1="259.49" y1="608.37" x2="578.39" y2="643.7" xlink:href="#Безымянный_градиент_77"/><linearGradient id="Безымянный_градиент_69-3" x1="506.28" y1="671.81" x2="596.92" y2="671.81" xlink:href="#Безымянный_градиент_69"/><linearGradient id="Безымянный_градиент_113" x1="220.5" y1="625.98" x2="541.14" y2="690.31" gradientUnits="userSpaceOnUse"><stop offset="0" stop-color="#59f8df"/><stop offset="0.12" stop-color="#4ed9ca"/><stop offset="0.37" stop-color="#318a96"/><stop offset="0.37" stop-color="#318996"/><stop offset="0.72" stop-color="#26b3ac"/><stop offset="0.95" stop-color="#59f8df"/></linearGradient><linearGradient id="Безымянный_градиент_85-2" x1="157.34" y1="894.08" x2="395.08" y2="732.22" xlink:href="#Безымянный_градиент_85"/><linearGradient id="Безымянный_градиент_86" x1="412.71" y1="801.04" x2="528.88" y2="668.6" gradientUnits="userSpaceOnUse"><stop offset="0.09" stop-color="#2ba1a2"/><stop offset="0.23" stop-color="#2e939b"/><stop offset="0.37" stop-color="#318996"/><stop offset="0.65" stop-color="#26b3ac"/><stop offset="0.85" stop-color="#59f8df"/></linearGradient></defs><polygon class="cls-1" points="258.16 994.91 258.9 643.41 348.8 595.99 348.06 947.49 258.16 994.91"/><polygon class="cls-2" points="506.28 994.42 273.79 980.68 348.07 941.5 596.18 947 506.28 994.42"/><polygon class="cls-3" points="507.02 935.17 596.92 887.75 596.18 962.65 506.28 1010.07 507.02 935.17"/><polygon class="cls-4" points="596.92 887.57 507.02 935.18 491.37 934.22 581.27 886.6 596.92 887.57"/><polygon class="cls-5" points="506.28 1010.07 490.65 1009.15 491.39 934.22 507.02 935.17 506.28 1010.07"/><polygon class="cls-6" points="490.65 1009.15 258.16 995.39 258.16 979.76 490.8 993.5 490.65 1009.15"/><polygon class="cls-7" points="372.65 1140.48 373.38 511.11 463.28 463.69 462.55 1093.06 372.65 1140.48"/><polygon class="cls-8" points="388.28 1132.23 372.65 1140.48 373.17 526.74 388.82 527.89 388.28 1132.23"/><polygon class="cls-9" points="373.38 511.11 463.28 463.69 757.8 474.5 667.91 521.92 373.38 511.11"/><polygon class="cls-7" points="667.91 521.92 757.8 474.5 757.07 549.4 667.17 596.82 667.91 521.92"/><polygon class="cls-10" points="667.75 537.54 373.36 526.74 373.38 511.11 667.91 521.92 667.75 537.54"/><polygon class="cls-11" points="667.17 596.82 651.53 595.9 652.12 536.38 667.75 537.54 667.17 596.82"/><polygon class="cls-12" points="258.9 643.41 348.8 595.99 596.92 610.65 507.02 658.07 258.9 643.41"/><polygon class="cls-13" points="507.02 658.07 596.92 610.65 596.18 685.55 506.28 732.97 507.02 658.07"/><polygon class="cls-14" points="507.01 673.71 258.9 659.08 258.9 643.45 507.01 658.07 507.01 673.71"/><polygon class="cls-15" points="273.8 980.68 258.16 979.76 258.9 659.05 274.53 660 273.8 980.68"/><polygon class="cls-16" points="506.28 732.97 490.65 732.05 491.39 672.75 507.02 673.71 506.28 732.97"/><path class="cls-7" d="M619.33,626.55h17.2v6.76H635.3l-16-1.84Zm0,77.4,16-1.85h2.45l16,1.85v4.91h-34.4ZM631,670.78v-6.14c0-12.66,0-25.43-.37-38.09h11.79c-.37,12.41-.37,25.19-.37,38.09v6.14c0,12.65,0,25.43.37,38.08H630.63C631,696.45,631,683.68,631,670.78Zm5.53-44.23h41.4l.86,24.33h-6.88l-4.43-24.33,6.15,6.14h-37.1Z"/><path class="cls-7" d="M674.61,702c1.35-2.82,2.82-4.54,5.53-4.54,3.93,0,6.51,2.58,9.46,6h-4.18c4.91-3.94,7-7.62,9.33-15.36,2.58-8.35,4.55-22.85,4.67-37.47h6.27c-.49,15.6-2.34,30.34-5.53,40.42-4.91,15.48-11.55,19.41-17.32,19.41C677.8,710.46,674.61,707.75,674.61,702Zm14.12-51.35h13v6.76h-1.6l-11.43-2.46Zm13,0h22v5.16h-22Zm8.1,53.93,13-2.46h2.45l12.29,2.46v4.3H709.86Zm9-21.5v-6.63c0-7.86-.12-20.27-.37-25.8H729c-.25,5.53-.37,17.94-.37,25.8v6.63c0,7.86.12,20.27.37,25.8H718.46C718.71,703.33,718.83,690.92,718.83,683.06Zm4.92-32.43h13.88v4.3l-12.29,2.46h-1.59Z"/><path class="cls-7" d="M769,676.67a135.06,135.06,0,0,1,19-5.16v4.43a111.64,111.64,0,0,0-16.46,4.91c-11,4.3-12.28,9-12.28,12.53,0,6.51,4.3,9.09,10,9.09,4.3,0,6.75-1.59,14.49-7.12l2.46-1.85,1.72,2.58-3.56,3.57c-7.37,7.37-11.55,10.81-19,10.81-9,0-16.46-5.16-16.46-15.36C748.81,688.22,752.49,682.69,769,676.67Zm14.13,20.89v-28c0-12-3.44-15-11.55-15a28.6,28.6,0,0,0-11,2.21l4.91-3.81-3.19,10.57c-1.11,3.56-3,5.53-6.27,5.53s-5.28-1.85-5.53-4.92c2.34-9.33,11.43-15.11,23.71-15.11,12.66,0,18.8,5.78,18.8,21.26v26c0,5.53,1.72,7.49,4.54,7.49,2.09,0,3.44-1.1,4.79-2.7l2.46,2.7c-3,4.67-6.26,6.27-10.44,6.27C787.5,710.09,783.08,705.18,783.08,697.56Z"/><path class="cls-7" d="M821,678.76c0,15.48,8.23,24,19.78,24A19.8,19.8,0,0,0,858,693.14l3,1.47c-3.31,10.2-11.18,15.85-22.72,15.85-16.83,0-27.4-11.8-27.4-30.59,0-19.29,13.51-30.84,28.13-30.84,10.94,0,20,6.76,21.62,15.85-.61,3.07-2.45,4.55-5.52,4.55-4.06,0-5.66-2.46-6.51-5.53l-3.08-10.81,5.66,4.54a25.6,25.6,0,0,0-11.8-3.07C828.65,654.56,821,663,821,678.76Z"/><path class="cls-7" d="M880.74,678.76c0,15.48,8.23,24,19.78,24a19.83,19.83,0,0,0,17.2-9.58l2.94,1.47c-3.31,10.2-11.18,15.85-22.72,15.85-16.83,0-27.4-11.8-27.4-30.59,0-19.29,13.52-30.84,28.13-30.84,10.94,0,20,6.76,21.63,15.85-.62,3.07-2.46,4.55-5.53,4.55-4.06,0-5.65-2.46-6.51-5.53l-3.07-10.81,5.65,4.54a25.6,25.6,0,0,0-11.8-3.07C888.36,654.56,880.74,663,880.74,678.76Z"/><path class="cls-7" d="M582.06,825.71v6.75l-7.62,1.72L577.51,816H585l-.49,17.82a51.76,51.76,0,0,1-24.82,5.89c-24.81,0-41.52-17.93-41.52-43,0-24.57,17.44-43,41.4-43a47.38,47.38,0,0,1,23.71,5.9l.49,17.81h-7.5l-3.07-18.18,7.62,1.72v7.49c-7-6.51-13.88-8.6-19.78-8.6-16.58,0-30,12.9-30,36.86s12,36.85,29.11,36.85A34,34,0,0,0,582.06,825.71Z"/><path class="cls-7" d="M646.3,801.51a24.49,24.49,0,0,1-.86,6.88H600.11v-5.16h29.24c5.9,0,7.25-2.83,7.25-6.27A13.64,13.64,0,0,0,623,783.57c-7.86,0-17,6.63-17,24.2,0,15.6,7.86,24,20.15,24,7.86,0,12.77-3.57,17.2-8.73l2.82,2.22c-4.42,8.72-12.28,14.25-23.46,14.25-16.46,0-27.15-11.43-27.15-30.1s12.77-31.33,28-31.33C636.23,778,646.3,786.64,646.3,801.51Z"/><path class="cls-7" d="M687,863.05v4.3H655.52v-4.3l13.88-2.45h2.45ZM665.83,806.3c0-6.76-.12-10.57-.36-15.48l-9.83-1.11v-4.3L672.35,778l1.84,1.23,1,10.44.49.25v38.33l-.37.73v12.29c0,8.6.13,17.44.37,26H665.47q.36-12.9.36-25.79Zm25.07-21.5c-4.55,0-10.69,2.21-19.66,10.93l-1.11-2.21C677.26,782.71,685.24,778,693.6,778c13,0,23.34,11.55,23.34,30.47s-10.81,31-25.18,31c-7.5,0-15.11-3.44-21.63-16.22l1.11-2c6.39,8.1,12.28,11.42,18.3,11.42,9.34,0,17-7.25,17-23.1S700,784.8,690.9,784.8Z"/><path class="cls-7" d="M728.11,779.64H742v6.76h-.86l-13-2.46Zm0,53.93,13-2.46H742v6.76H728.11Zm9-21.5v-6.63c0-7.86-.12-20.27-.37-25.8h10.57c-.25,5.53-.37,17.94-.37,27.39v5c0,7.86.12,20.27.37,25.8H736.71C737,832.34,737.08,819.93,737.08,812.07ZM742,832.71h14.49c10.2,0,15.11-3.81,15.11-10.69,0-7.74-4.79-11.91-15.84-11.91H742v-4.67h13.51c9.58,0,13.64-3.44,13.64-10.81,0-6.88-4.06-9.83-11.92-9.83H742v-5.16h17.81c12.28,0,19.29,5.9,19.29,14.25,0,6.76-4.55,12.78-16,14.13v-.74c13.39,1.11,18.79,7.25,18.79,14.87s-6.63,15.72-23.34,15.72H742Z"/><path class="cls-7" d="M791.38,779.64h27.76v4.3l-12.28,2.46H804.4l-13-2.46Zm0,53.93,12.78-2.46h2.45l12.53,2.46v4.3H791.38Zm9-21.5v-6.63c0-7.86-.13-20.27-.37-25.8h9.83v58.23H800C800.22,832.34,800.35,819.93,800.35,812.07ZM843.1,786.4h6.63l-42,44.71h-6.64Zm-11.43-6.76h27.77v4.3l-12.29,2.46H844.7l-13-2.46Zm0,53.93,12.78-2.46h2.46l12.53,2.46v4.3H831.67Zm9.46-53.93h9.71c-.25,5.53-.37,17.94-.37,25.8v6.63c0,7.86.12,20.27.37,25.8h-9.71Z"/><path class="cls-7" d="M880.44,807.77c0,15.48,8.23,24,19.78,24a19.82,19.82,0,0,0,17.2-9.58l3,1.47c-3.32,10.2-11.18,15.85-22.73,15.85-16.83,0-27.4-11.8-27.4-30.59,0-19.29,13.52-30.84,28.14-30.84,10.93,0,20,6.76,21.62,15.85-.62,3.07-2.46,4.55-5.53,4.55-4.05,0-5.65-2.46-6.51-5.53l-3.07-10.81,5.65,4.54a25.56,25.56,0,0,0-11.79-3.07C888.06,783.57,880.44,792.05,880.44,807.77Z"/></svg>
                                    </a>
                                </div>
                            </div>
                        <?php
                        $model1 = 'end';
                        $model2 = 10;
                         $this->render('nav', compact('model1', 'model2'));
                        ?>
                    </nav>

                    <div class="col-12 col-lg-2 text-center d-none">
                        <a href="<?= <?= Url::to(['/site/bell']); ?> ?>">
                            <button type="button" class="btn header-btn mb-1">
                                <i class="fa fa-phone" aria-hidden="true" style="color: #ccc;"></i> 
                                заказать звонок</button>
                        </a> 
                    </div>
                </div>            
            </div>


            <div class="container my-2 d-none">
                <div class="row">
                    <strong><a href = "<?= Url::to('@web/admin_435') ?>">К списку.</a></strong>
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
            <div class="container-fluid">
                <div class="row p-2 text-center">

                    <div class="col-12 col-lg-4 border-right">
                            <div class="wrap-svg2 justify-content-center">
                                <div class="col-12">
                                    <a href="<?= Url::to(['/site/index']); ?>">
                                        <svg id="Слой_1" data-name="Слой 1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 1053.96 1689.19"><defs><style>.cls-1{fill:url(#Безымянный_градиент_69);}.cls-2{fill:url(#Безымянный_градиент_77);}.cls-3{fill:url(#Безымянный_градиент_69-2);}.cls-4{fill:url(#Безымянный_градиент_137);}.cls-5{fill:url(#Безымянный_градиент_85);}.cls-6{fill:url(#Безымянный_градиент_76);}.cls-7{fill:#36758b;}.cls-8{fill:url(#Безымянный_градиент_123);}.cls-9{fill:url(#Безымянный_градиент_136);}.cls-10{fill:url(#Безымянный_градиент_121);}.cls-11{fill:url(#Безымянный_градиент_134);}.cls-12{fill:url(#Безымянный_градиент_77-2);}.cls-13{fill:url(#Безымянный_градиент_69-3);}.cls-14{fill:url(#Безымянный_градиент_113);}.cls-15{fill:url(#Безымянный_градиент_85-2);}.cls-16{fill:url(#Безымянный_градиент_86);}</style><linearGradient id="Безымянный_градиент_69" x1="258.16" y1="795.45" x2="348.8" y2="795.45" gradientUnits="userSpaceOnUse"><stop offset="0" stop-color="#26b3ac"/><stop offset="0.81" stop-color="#26b3ac"/></linearGradient><linearGradient id="Безымянный_градиент_77" x1="227.33" y1="940.84" x2="531.22" y2="974.5" gradientUnits="userSpaceOnUse"><stop offset="0" stop-color="#2ba1a2"/><stop offset="0.05" stop-color="#2e939b"/><stop offset="0.11" stop-color="#318996"/><stop offset="0.13" stop-color="#308c98"/><stop offset="0.52" stop-color="#26b3ac"/><stop offset="0.67" stop-color="#26b3ac"/><stop offset="1" stop-color="#59f8df"/></linearGradient><linearGradient id="Безымянный_градиент_69-2" x1="506.28" y1="948.91" x2="596.92" y2="948.91" xlink:href="#Безымянный_градиент_69"/><linearGradient id="Безымянный_градиент_137" x1="402.61" y1="933.53" x2="620.14" y2="898.74" gradientUnits="userSpaceOnUse"><stop offset="0.04" stop-color="#2ba1a2"/><stop offset="0.2" stop-color="#2e939b"/><stop offset="0.37" stop-color="#318996"/><stop offset="0.58" stop-color="#26b3ac"/><stop offset="0.96" stop-color="#59f8df"/></linearGradient><linearGradient id="Безымянный_градиент_85" x1="471.22" y1="1128.08" x2="512.16" y2="896.89" gradientUnits="userSpaceOnUse"><stop offset="0.04" stop-color="#2ba1a2"/><stop offset="0.2" stop-color="#2e939b"/><stop offset="0.37" stop-color="#318996"/><stop offset="0.65" stop-color="#26b3ac"/><stop offset="0.85" stop-color="#59f8df"/></linearGradient><linearGradient id="Безымянный_градиент_76" x1="188.44" y1="973.31" x2="512.14" y2="1010.08" gradientUnits="userSpaceOnUse"><stop offset="0" stop-color="#2ba1a2"/><stop offset="0.01" stop-color="#4baeaf"/><stop offset="0.04" stop-color="#88c8ca"/><stop offset="0.06" stop-color="#b5dbdd"/><stop offset="0.08" stop-color="#d1e7e9"/><stop offset="0.08" stop-color="#dbebed"/><stop offset="0.37" stop-color="#318996"/><stop offset="0.72" stop-color="#26b3ac"/><stop offset="0.95" stop-color="#59f8df"/></linearGradient><linearGradient id="Безымянный_градиент_123" x1="342.33" y1="933.57" x2="441.04" y2="665.99" gradientUnits="userSpaceOnUse"><stop offset="0" stop-color="#336d81"/><stop offset="0.33" stop-color="#26b3ac"/><stop offset="0.62" stop-color="#3cd1c2"/><stop offset="1" stop-color="#338192"/></linearGradient><linearGradient id="Безымянный_градиент_136" x1="374.02" y1="471.58" x2="736.76" y2="511.77" gradientUnits="userSpaceOnUse"><stop offset="0" stop-color="#26b3ac"/><stop offset="0.8" stop-color="#36758b"/><stop offset="1" stop-color="#abc5ce"/></linearGradient><linearGradient id="Безымянный_градиент_121" x1="297" y1="524.33" x2="684.81" y2="524.33" gradientUnits="userSpaceOnUse"><stop offset="0" stop-color="#36758b"/><stop offset="0.08" stop-color="#c4d6dd"/><stop offset="0.51" stop-color="#26b3ac"/><stop offset="0.68" stop-color="#17b6c5"/><stop offset="1" stop-color="#338192"/></linearGradient><linearGradient id="Безымянный_градиент_134" x1="628.5" y1="598.5" x2="680.52" y2="545.22" gradientUnits="userSpaceOnUse"><stop offset="0.08" stop-color="#336d81"/><stop offset="0.33" stop-color="#26b3ac"/><stop offset="0.6" stop-color="#31c2b7"/><stop offset="0.94" stop-color="#338192"/></linearGradient><linearGradient id="Безымянный_градиент_77-2" x1="259.49" y1="608.37" x2="578.39" y2="643.7" xlink:href="#Безымянный_градиент_77"/><linearGradient id="Безымянный_градиент_69-3" x1="506.28" y1="671.81" x2="596.92" y2="671.81" xlink:href="#Безымянный_градиент_69"/><linearGradient id="Безымянный_градиент_113" x1="220.5" y1="625.98" x2="541.14" y2="690.31" gradientUnits="userSpaceOnUse"><stop offset="0" stop-color="#59f8df"/><stop offset="0.12" stop-color="#4ed9ca"/><stop offset="0.37" stop-color="#318a96"/><stop offset="0.37" stop-color="#318996"/><stop offset="0.72" stop-color="#26b3ac"/><stop offset="0.95" stop-color="#59f8df"/></linearGradient><linearGradient id="Безымянный_градиент_85-2" x1="157.34" y1="894.08" x2="395.08" y2="732.22" xlink:href="#Безымянный_градиент_85"/><linearGradient id="Безымянный_градиент_86" x1="412.71" y1="801.04" x2="528.88" y2="668.6" gradientUnits="userSpaceOnUse"><stop offset="0.09" stop-color="#2ba1a2"/><stop offset="0.23" stop-color="#2e939b"/><stop offset="0.37" stop-color="#318996"/><stop offset="0.65" stop-color="#26b3ac"/><stop offset="0.85" stop-color="#59f8df"/></linearGradient></defs><polygon class="cls-1" points="258.16 994.91 258.9 643.41 348.8 595.99 348.06 947.49 258.16 994.91"/><polygon class="cls-2" points="506.28 994.42 273.79 980.68 348.07 941.5 596.18 947 506.28 994.42"/><polygon class="cls-3" points="507.02 935.17 596.92 887.75 596.18 962.65 506.28 1010.07 507.02 935.17"/><polygon class="cls-4" points="596.92 887.57 507.02 935.18 491.37 934.22 581.27 886.6 596.92 887.57"/><polygon class="cls-5" points="506.28 1010.07 490.65 1009.15 491.39 934.22 507.02 935.17 506.28 1010.07"/><polygon class="cls-6" points="490.65 1009.15 258.16 995.39 258.16 979.76 490.8 993.5 490.65 1009.15"/><polygon class="cls-7" points="372.65 1140.48 373.38 511.11 463.28 463.69 462.55 1093.06 372.65 1140.48"/><polygon class="cls-8" points="388.28 1132.23 372.65 1140.48 373.17 526.74 388.82 527.89 388.28 1132.23"/><polygon class="cls-9" points="373.38 511.11 463.28 463.69 757.8 474.5 667.91 521.92 373.38 511.11"/><polygon class="cls-7" points="667.91 521.92 757.8 474.5 757.07 549.4 667.17 596.82 667.91 521.92"/><polygon class="cls-10" points="667.75 537.54 373.36 526.74 373.38 511.11 667.91 521.92 667.75 537.54"/><polygon class="cls-11" points="667.17 596.82 651.53 595.9 652.12 536.38 667.75 537.54 667.17 596.82"/><polygon class="cls-12" points="258.9 643.41 348.8 595.99 596.92 610.65 507.02 658.07 258.9 643.41"/><polygon class="cls-13" points="507.02 658.07 596.92 610.65 596.18 685.55 506.28 732.97 507.02 658.07"/><polygon class="cls-14" points="507.01 673.71 258.9 659.08 258.9 643.45 507.01 658.07 507.01 673.71"/><polygon class="cls-15" points="273.8 980.68 258.16 979.76 258.9 659.05 274.53 660 273.8 980.68"/><polygon class="cls-16" points="506.28 732.97 490.65 732.05 491.39 672.75 507.02 673.71 506.28 732.97"/><path class="cls-7" d="M619.33,626.55h17.2v6.76H635.3l-16-1.84Zm0,77.4,16-1.85h2.45l16,1.85v4.91h-34.4ZM631,670.78v-6.14c0-12.66,0-25.43-.37-38.09h11.79c-.37,12.41-.37,25.19-.37,38.09v6.14c0,12.65,0,25.43.37,38.08H630.63C631,696.45,631,683.68,631,670.78Zm5.53-44.23h41.4l.86,24.33h-6.88l-4.43-24.33,6.15,6.14h-37.1Z"/><path class="cls-7" d="M674.61,702c1.35-2.82,2.82-4.54,5.53-4.54,3.93,0,6.51,2.58,9.46,6h-4.18c4.91-3.94,7-7.62,9.33-15.36,2.58-8.35,4.55-22.85,4.67-37.47h6.27c-.49,15.6-2.34,30.34-5.53,40.42-4.91,15.48-11.55,19.41-17.32,19.41C677.8,710.46,674.61,707.75,674.61,702Zm14.12-51.35h13v6.76h-1.6l-11.43-2.46Zm13,0h22v5.16h-22Zm8.1,53.93,13-2.46h2.45l12.29,2.46v4.3H709.86Zm9-21.5v-6.63c0-7.86-.12-20.27-.37-25.8H729c-.25,5.53-.37,17.94-.37,25.8v6.63c0,7.86.12,20.27.37,25.8H718.46C718.71,703.33,718.83,690.92,718.83,683.06Zm4.92-32.43h13.88v4.3l-12.29,2.46h-1.59Z"/><path class="cls-7" d="M769,676.67a135.06,135.06,0,0,1,19-5.16v4.43a111.64,111.64,0,0,0-16.46,4.91c-11,4.3-12.28,9-12.28,12.53,0,6.51,4.3,9.09,10,9.09,4.3,0,6.75-1.59,14.49-7.12l2.46-1.85,1.72,2.58-3.56,3.57c-7.37,7.37-11.55,10.81-19,10.81-9,0-16.46-5.16-16.46-15.36C748.81,688.22,752.49,682.69,769,676.67Zm14.13,20.89v-28c0-12-3.44-15-11.55-15a28.6,28.6,0,0,0-11,2.21l4.91-3.81-3.19,10.57c-1.11,3.56-3,5.53-6.27,5.53s-5.28-1.85-5.53-4.92c2.34-9.33,11.43-15.11,23.71-15.11,12.66,0,18.8,5.78,18.8,21.26v26c0,5.53,1.72,7.49,4.54,7.49,2.09,0,3.44-1.1,4.79-2.7l2.46,2.7c-3,4.67-6.26,6.27-10.44,6.27C787.5,710.09,783.08,705.18,783.08,697.56Z"/><path class="cls-7" d="M821,678.76c0,15.48,8.23,24,19.78,24A19.8,19.8,0,0,0,858,693.14l3,1.47c-3.31,10.2-11.18,15.85-22.72,15.85-16.83,0-27.4-11.8-27.4-30.59,0-19.29,13.51-30.84,28.13-30.84,10.94,0,20,6.76,21.62,15.85-.61,3.07-2.45,4.55-5.52,4.55-4.06,0-5.66-2.46-6.51-5.53l-3.08-10.81,5.66,4.54a25.6,25.6,0,0,0-11.8-3.07C828.65,654.56,821,663,821,678.76Z"/><path class="cls-7" d="M880.74,678.76c0,15.48,8.23,24,19.78,24a19.83,19.83,0,0,0,17.2-9.58l2.94,1.47c-3.31,10.2-11.18,15.85-22.72,15.85-16.83,0-27.4-11.8-27.4-30.59,0-19.29,13.52-30.84,28.13-30.84,10.94,0,20,6.76,21.63,15.85-.62,3.07-2.46,4.55-5.53,4.55-4.06,0-5.65-2.46-6.51-5.53l-3.07-10.81,5.65,4.54a25.6,25.6,0,0,0-11.8-3.07C888.36,654.56,880.74,663,880.74,678.76Z"/><path class="cls-7" d="M582.06,825.71v6.75l-7.62,1.72L577.51,816H585l-.49,17.82a51.76,51.76,0,0,1-24.82,5.89c-24.81,0-41.52-17.93-41.52-43,0-24.57,17.44-43,41.4-43a47.38,47.38,0,0,1,23.71,5.9l.49,17.81h-7.5l-3.07-18.18,7.62,1.72v7.49c-7-6.51-13.88-8.6-19.78-8.6-16.58,0-30,12.9-30,36.86s12,36.85,29.11,36.85A34,34,0,0,0,582.06,825.71Z"/><path class="cls-7" d="M646.3,801.51a24.49,24.49,0,0,1-.86,6.88H600.11v-5.16h29.24c5.9,0,7.25-2.83,7.25-6.27A13.64,13.64,0,0,0,623,783.57c-7.86,0-17,6.63-17,24.2,0,15.6,7.86,24,20.15,24,7.86,0,12.77-3.57,17.2-8.73l2.82,2.22c-4.42,8.72-12.28,14.25-23.46,14.25-16.46,0-27.15-11.43-27.15-30.1s12.77-31.33,28-31.33C636.23,778,646.3,786.64,646.3,801.51Z"/><path class="cls-7" d="M687,863.05v4.3H655.52v-4.3l13.88-2.45h2.45ZM665.83,806.3c0-6.76-.12-10.57-.36-15.48l-9.83-1.11v-4.3L672.35,778l1.84,1.23,1,10.44.49.25v38.33l-.37.73v12.29c0,8.6.13,17.44.37,26H665.47q.36-12.9.36-25.79Zm25.07-21.5c-4.55,0-10.69,2.21-19.66,10.93l-1.11-2.21C677.26,782.71,685.24,778,693.6,778c13,0,23.34,11.55,23.34,30.47s-10.81,31-25.18,31c-7.5,0-15.11-3.44-21.63-16.22l1.11-2c6.39,8.1,12.28,11.42,18.3,11.42,9.34,0,17-7.25,17-23.1S700,784.8,690.9,784.8Z"/><path class="cls-7" d="M728.11,779.64H742v6.76h-.86l-13-2.46Zm0,53.93,13-2.46H742v6.76H728.11Zm9-21.5v-6.63c0-7.86-.12-20.27-.37-25.8h10.57c-.25,5.53-.37,17.94-.37,27.39v5c0,7.86.12,20.27.37,25.8H736.71C737,832.34,737.08,819.93,737.08,812.07ZM742,832.71h14.49c10.2,0,15.11-3.81,15.11-10.69,0-7.74-4.79-11.91-15.84-11.91H742v-4.67h13.51c9.58,0,13.64-3.44,13.64-10.81,0-6.88-4.06-9.83-11.92-9.83H742v-5.16h17.81c12.28,0,19.29,5.9,19.29,14.25,0,6.76-4.55,12.78-16,14.13v-.74c13.39,1.11,18.79,7.25,18.79,14.87s-6.63,15.72-23.34,15.72H742Z"/><path class="cls-7" d="M791.38,779.64h27.76v4.3l-12.28,2.46H804.4l-13-2.46Zm0,53.93,12.78-2.46h2.45l12.53,2.46v4.3H791.38Zm9-21.5v-6.63c0-7.86-.13-20.27-.37-25.8h9.83v58.23H800C800.22,832.34,800.35,819.93,800.35,812.07ZM843.1,786.4h6.63l-42,44.71h-6.64Zm-11.43-6.76h27.77v4.3l-12.29,2.46H844.7l-13-2.46Zm0,53.93,12.78-2.46h2.46l12.53,2.46v4.3H831.67Zm9.46-53.93h9.71c-.25,5.53-.37,17.94-.37,25.8v6.63c0,7.86.12,20.27.37,25.8h-9.71Z"/><path class="cls-7" d="M880.44,807.77c0,15.48,8.23,24,19.78,24a19.82,19.82,0,0,0,17.2-9.58l3,1.47c-3.32,10.2-11.18,15.85-22.73,15.85-16.83,0-27.4-11.8-27.4-30.59,0-19.29,13.52-30.84,28.14-30.84,10.93,0,20,6.76,21.62,15.85-.62,3.07-2.46,4.55-5.53,4.55-4.05,0-5.65-2.46-6.51-5.53l-3.07-10.81,5.65,4.54a25.56,25.56,0,0,0-11.79-3.07C888.06,783.57,880.44,792.05,880.44,807.77Z"/></svg>
                                    </a>
                                </div>
                            </div>
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
                                        +7 964-632-1620
                                    </div>
                                    <div class="col col-lg-4">
                                        <a href="<?= <?= Url::to(['/site/bell']); ?>?>">
                                            <button type="button" class="btn footer-btn mb-1">
                                                <i class="fa fa-phone" aria-hidden="true" style="color: #ccc;"></i> 
                                                заказать звонок</button>
                                        </a> 
                                    </div>
                                </div>
                            </div>

                            <div class="col pt-5 pb-2 d-none">
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
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" 
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" 
        integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    </body>
</html>
<?php $this->endPage() ?>
