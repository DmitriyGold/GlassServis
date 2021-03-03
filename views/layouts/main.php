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
                <div class="row header-top align-items-center py-1 text-center">


                    <div class="col-12 col-md text-md-left pb-2 pb-md-0">
                        <p></p>
                    </div> 

                    <div class="col-12 col-md-auto text-center text-md-right border-right border-secondary block-phone pb-2 pb-md-0">
                        <?= $main[1][text] ?> <?= $main[2][text] ?>
                    </div>

                    
                    <!-- Вход регистрация выход пользавателя-->
                    <div class="col-12 col-md-auto text-md-right pb-2 pb-md-0 pr-5">
                        <?php if (!Yii::$app->user->isGuest): ?>
                        <a href="<?= Url::to(['/site/logout']); ?>">
                            <?= Yii::$app->user->identity['username']; ?> / выход</a>
                    <?php else: ?>

                        <a href="<?= Url::to(['/site/login']); ?>">вход</a> / 
                        <a href="<?= Url::to(['/site/signup']); ?>">регистрация</a>
                    <?php endif; ?>                        
                    </div>                     
                    
                    


                </div>

                <div class="row header-bottom align-items-center pb-2">
                    <nav class="navbar col-12 col-lg-10 navbar-expand-lg navbar-light px-4 justify-content-end">

                        <div class="col-12 col-lg-2 align-self-end">
                            <div class="row justify-content-end wrap-svg2">
                                <div class="col">
                                    <a href="<?= Url::to(['/site/index']); ?>">
                                        <svg id="Слой_1" data-name="Слой 1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 674.65 674.65"><defs><style>.cls-1{fill:url(#Безымянный_градиент_69);}.cls-2{fill:url(#Безымянный_градиент_77);}.cls-3{fill:url(#Безымянный_градиент_69-2);}.cls-4{fill:url(#Безымянный_градиент_137);}.cls-5{fill:url(#Безымянный_градиент_85);}.cls-6{fill:url(#Безымянный_градиент_76);}.cls-7{fill:#36758b;}.cls-8{fill:url(#Безымянный_градиент_123);}.cls-9{fill:url(#Безымянный_градиент_136);}.cls-10{fill:url(#Безымянный_градиент_121);}.cls-11{fill:url(#Безымянный_градиент_134);}.cls-12{fill:url(#Безымянный_градиент_77-2);}.cls-13{fill:url(#Безымянный_градиент_69-3);}.cls-14{fill:url(#Безымянный_градиент_113);}.cls-15{fill:url(#Безымянный_градиент_85-2);}.cls-16{fill:url(#Безымянный_градиент_86);}</style><linearGradient id="Безымянный_градиент_69" x1="3.92" y1="330.69" x2="94.56" y2="330.69" gradientUnits="userSpaceOnUse"><stop offset="0" stop-color="#26b3ac"/><stop offset="0.81" stop-color="#26b3ac"/></linearGradient><linearGradient id="Безымянный_градиент_77" x1="-26.91" y1="476.08" x2="276.98" y2="509.74" gradientUnits="userSpaceOnUse"><stop offset="0" stop-color="#2ba1a2"/><stop offset="0.05" stop-color="#2e939b"/><stop offset="0.11" stop-color="#318996"/><stop offset="0.13" stop-color="#308c98"/><stop offset="0.52" stop-color="#26b3ac"/><stop offset="0.67" stop-color="#26b3ac"/><stop offset="1" stop-color="#59f8df"/></linearGradient><linearGradient id="Безымянный_градиент_69-2" x1="252.04" y1="484.15" x2="342.68" y2="484.15" xlink:href="#Безымянный_градиент_69"/><linearGradient id="Безымянный_градиент_137" x1="148.38" y1="468.77" x2="365.9" y2="433.98" gradientUnits="userSpaceOnUse"><stop offset="0.04" stop-color="#2ba1a2"/><stop offset="0.2" stop-color="#2e939b"/><stop offset="0.37" stop-color="#318996"/><stop offset="0.58" stop-color="#26b3ac"/><stop offset="0.96" stop-color="#59f8df"/></linearGradient><linearGradient id="Безымянный_градиент_85" x1="216.98" y1="663.32" x2="257.92" y2="432.13" gradientUnits="userSpaceOnUse"><stop offset="0.04" stop-color="#2ba1a2"/><stop offset="0.2" stop-color="#2e939b"/><stop offset="0.37" stop-color="#318996"/><stop offset="0.65" stop-color="#26b3ac"/><stop offset="0.85" stop-color="#59f8df"/></linearGradient><linearGradient id="Безымянный_градиент_76" x1="-65.8" y1="508.55" x2="257.9" y2="545.32" gradientUnits="userSpaceOnUse"><stop offset="0" stop-color="#2ba1a2"/><stop offset="0.01" stop-color="#4baeaf"/><stop offset="0.04" stop-color="#88c8ca"/><stop offset="0.06" stop-color="#b5dbdd"/><stop offset="0.08" stop-color="#d1e7e9"/><stop offset="0.08" stop-color="#dbebed"/><stop offset="0.37" stop-color="#318996"/><stop offset="0.72" stop-color="#26b3ac"/><stop offset="0.95" stop-color="#59f8df"/></linearGradient><linearGradient id="Безымянный_градиент_123" x1="88.09" y1="468.81" x2="186.8" y2="201.23" gradientUnits="userSpaceOnUse"><stop offset="0" stop-color="#336d81"/><stop offset="0.33" stop-color="#26b3ac"/><stop offset="0.62" stop-color="#3cd1c2"/><stop offset="1" stop-color="#338192"/></linearGradient><linearGradient id="Безымянный_градиент_136" x1="119.78" y1="6.82" x2="482.52" y2="47.01" gradientUnits="userSpaceOnUse"><stop offset="0" stop-color="#26b3ac"/><stop offset="0.8" stop-color="#36758b"/><stop offset="1" stop-color="#abc5ce"/></linearGradient><linearGradient id="Безымянный_градиент_121" x1="42.76" y1="59.57" x2="430.57" y2="59.57" gradientUnits="userSpaceOnUse"><stop offset="0" stop-color="#36758b"/><stop offset="0.08" stop-color="#c4d6dd"/><stop offset="0.51" stop-color="#26b3ac"/><stop offset="0.68" stop-color="#17b6c5"/><stop offset="1" stop-color="#338192"/></linearGradient><linearGradient id="Безымянный_градиент_134" x1="374.26" y1="133.74" x2="426.28" y2="80.46" gradientUnits="userSpaceOnUse"><stop offset="0.08" stop-color="#336d81"/><stop offset="0.33" stop-color="#26b3ac"/><stop offset="0.6" stop-color="#31c2b7"/><stop offset="0.94" stop-color="#338192"/></linearGradient><linearGradient id="Безымянный_градиент_77-2" x1="5.25" y1="143.61" x2="324.15" y2="178.94" xlink:href="#Безымянный_градиент_77"/><linearGradient id="Безымянный_градиент_69-3" x1="252.04" y1="207.05" x2="342.68" y2="207.05" xlink:href="#Безымянный_градиент_69"/><linearGradient id="Безымянный_градиент_113" x1="-33.74" y1="161.22" x2="286.9" y2="225.55" gradientUnits="userSpaceOnUse"><stop offset="0" stop-color="#59f8df"/><stop offset="0.12" stop-color="#4ed9ca"/><stop offset="0.37" stop-color="#318a96"/><stop offset="0.37" stop-color="#318996"/><stop offset="0.72" stop-color="#26b3ac"/><stop offset="0.95" stop-color="#59f8df"/></linearGradient><linearGradient id="Безымянный_градиент_85-2" x1="-96.9" y1="429.32" x2="140.84" y2="267.46" xlink:href="#Безымянный_градиент_85"/><linearGradient id="Безымянный_градиент_86" x1="158.47" y1="336.28" x2="274.64" y2="203.84" gradientUnits="userSpaceOnUse"><stop offset="0.09" stop-color="#2ba1a2"/><stop offset="0.23" stop-color="#2e939b"/><stop offset="0.37" stop-color="#318996"/><stop offset="0.65" stop-color="#26b3ac"/><stop offset="0.85" stop-color="#59f8df"/></linearGradient></defs><polygon class="cls-1" points="3.92 530.15 4.66 178.65 94.56 131.23 93.82 482.73 3.92 530.15"/><polygon class="cls-2" points="252.04 529.66 19.55 515.92 93.83 476.74 341.94 482.24 252.04 529.66"/><polygon class="cls-3" points="252.78 470.41 342.68 422.99 341.94 497.89 252.04 545.31 252.78 470.41"/><polygon class="cls-4" points="342.68 422.81 252.78 470.42 237.13 469.46 327.03 421.84 342.68 422.81"/><polygon class="cls-5" points="252.04 545.31 236.41 544.39 237.15 469.46 252.78 470.41 252.04 545.31"/><polygon class="cls-6" points="236.41 544.39 3.92 530.63 3.92 515 236.56 528.74 236.41 544.39"/><polygon class="cls-7" points="118.41 675.72 119.14 46.35 209.04 -1.07 208.31 628.3 118.41 675.72"/><polygon class="cls-8" points="134.04 667.47 118.41 675.72 118.93 61.98 134.58 63.13 134.04 667.47"/><polygon class="cls-9" points="119.14 46.35 209.04 -1.07 503.57 9.74 413.67 57.16 119.14 46.35"/><polygon class="cls-7" points="413.67 57.16 503.57 9.74 502.83 84.64 412.93 132.06 413.67 57.16"/><polygon class="cls-10" points="413.51 72.78 119.12 61.98 119.14 46.35 413.67 57.16 413.51 72.78"/><polygon class="cls-11" points="412.93 132.06 397.3 131.14 397.88 71.62 413.51 72.78 412.93 132.06"/><polygon class="cls-12" points="4.66 178.65 94.56 131.23 342.68 145.89 252.78 193.31 4.66 178.65"/><polygon class="cls-13" points="252.78 193.31 342.68 145.89 341.94 220.79 252.04 268.21 252.78 193.31"/><polygon class="cls-14" points="252.77 208.95 4.66 194.32 4.66 178.69 252.77 193.31 252.77 208.95"/><polygon class="cls-15" points="19.56 515.92 3.92 515 4.66 194.29 20.3 195.24 19.56 515.92"/><polygon class="cls-16" points="252.04 268.21 236.41 267.29 237.15 207.99 252.78 208.95 252.04 268.21"/><path class="cls-7" d="M365.09,161.79h17.2v6.76h-1.23l-16-1.84Zm0,77.4,16-1.85h2.46l16,1.85v4.91h-34.4ZM376.76,206v-6.15c0-12.65,0-25.42-.37-38.08h11.79c-.36,12.41-.36,25.19-.36,38.08V206c0,12.65,0,25.43.36,38.08H376.39C376.76,231.69,376.76,218.92,376.76,206Zm5.53-44.23h41.4l.86,24.33h-6.88l-4.43-24.33,6.15,6.14h-37.1Z"/><path class="cls-7" d="M420.37,237.22c1.35-2.82,2.82-4.54,5.53-4.54,3.93,0,6.51,2.58,9.46,6h-4.18c4.91-3.94,7-7.62,9.34-15.36,2.58-8.35,4.54-22.85,4.66-37.47h6.27c-.49,15.6-2.33,30.34-5.53,40.42C441,241.77,434.37,245.7,428.6,245.7,423.56,245.7,420.37,243,420.37,237.22Zm14.13-51.35h13v6.76h-1.6l-11.42-2.46Zm13,0h22V191h-22Zm8.11,53.93,13-2.46h2.46l12.28,2.46v4.3H455.63Zm9-21.5v-6.63c0-7.86-.12-20.27-.36-25.8h10.56c-.25,5.53-.37,17.94-.37,25.8v6.63c0,7.86.12,20.27.37,25.8H464.23C464.47,238.57,464.59,226.16,464.59,218.3Zm4.92-32.43h13.88v4.3l-12.28,2.46h-1.6Z"/><path class="cls-7" d="M514.71,211.91a135.06,135.06,0,0,1,19-5.16v4.43a111.64,111.64,0,0,0-16.46,4.91c-11,4.3-12.28,9-12.28,12.53,0,6.51,4.3,9.09,10,9.09,4.3,0,6.76-1.59,14.49-7.12l2.46-1.85,1.72,2.58-3.56,3.57c-7.37,7.37-11.55,10.81-19,10.81-9,0-16.46-5.16-16.46-15.36C494.57,223.46,498.25,217.93,514.71,211.91Zm14.13,20.89v-28c0-12-3.44-15-11.55-15a28.6,28.6,0,0,0-11,2.21l4.91-3.81L508,198.77c-1.11,3.56-2.95,5.53-6.27,5.53s-5.28-1.85-5.53-4.92c2.34-9.33,11.43-15.11,23.71-15.11,12.66,0,18.8,5.78,18.8,21.26v26c0,5.53,1.72,7.49,4.54,7.49,2.09,0,3.44-1.1,4.79-2.7l2.46,2.7c-3,4.67-6.26,6.27-10.44,6.27C533.26,245.33,528.84,240.41,528.84,232.8Z"/><path class="cls-7" d="M566.8,214c0,15.48,8.23,24,19.78,24a19.83,19.83,0,0,0,17.2-9.58l2.94,1.47c-3.31,10.2-11.18,15.85-22.72,15.85-16.83,0-27.4-11.8-27.4-30.59,0-19.29,13.52-30.84,28.13-30.84,10.94,0,20,6.76,21.63,15.85-.62,3.07-2.46,4.55-5.53,4.55-4.06,0-5.65-2.46-6.51-5.53l-3.08-10.81,5.66,4.54a25.6,25.6,0,0,0-11.8-3.07C574.41,189.8,566.8,198.28,566.8,214Z"/><path class="cls-7" d="M626.5,214c0,15.48,8.23,24,19.78,24a19.83,19.83,0,0,0,17.2-9.58l2.94,1.47c-3.31,10.2-11.17,15.85-22.72,15.85-16.83,0-27.4-11.8-27.4-30.59,0-19.29,13.52-30.84,28.14-30.84,10.93,0,20,6.76,21.62,15.85-.62,3.07-2.46,4.55-5.53,4.55-4.06,0-5.65-2.46-6.51-5.53L651,188.33l5.65,4.54a25.6,25.6,0,0,0-11.8-3.07C634.12,189.8,626.5,198.28,626.5,214Z"/><path class="cls-7" d="M327.82,361v6.75l-7.62,1.72,3.07-18.18h7.5l-.49,17.82A51.76,51.76,0,0,1,305.46,375c-24.81,0-41.52-17.93-41.52-43,0-24.57,17.44-43,41.4-43a47.47,47.47,0,0,1,23.71,5.89l.49,17.82h-7.49L319,294.49l7.62,1.72v7.49c-7-6.51-13.88-8.6-19.78-8.6-16.58,0-30,12.9-30,36.86s12,36.85,29.11,36.85A34,34,0,0,0,327.82,361Z"/><path class="cls-7" d="M392.07,336.75a24.44,24.44,0,0,1-.87,6.88H345.87v-5.16h29.24c5.9,0,7.25-2.83,7.25-6.27a13.64,13.64,0,0,0-13.64-13.39c-7.86,0-17,6.63-17,24.2,0,15.6,7.86,24,20.15,24,7.86,0,12.77-3.57,17.2-8.73l2.82,2.22c-4.42,8.72-12.28,14.25-23.46,14.25-16.46,0-27.15-11.43-27.15-30.1s12.78-31.33,28-31.33C382,313.28,392.07,321.88,392.07,336.75Z"/><path class="cls-7" d="M432.73,398.29v4.3H401.28v-4.3l13.88-2.45h2.46ZM411.6,341.54c0-6.76-.13-10.57-.37-15.48L401.4,325v-4.3l16.71-7.37,1.84,1.23,1,10.44.49.25v38.33l-.37.73v12.29c0,8.6.13,17.44.37,26H411.23q.36-12.9.37-25.8ZM436.66,320C432.11,320,426,322.25,417,331l-1.1-2.21C423,318,431,313.28,439.36,313.28c13,0,23.34,11.55,23.34,30.47s-10.81,31-25.18,31c-7.5,0-15.11-3.44-21.62-16.22l1.1-2c6.39,8.11,12.29,11.43,18.31,11.43,9.33,0,16.95-7.25,16.95-23.1S445.75,320,436.66,320Z"/><path class="cls-7" d="M473.88,314.88h13.88v6.76h-.86l-13-2.46Zm0,53.93,13-2.46h.86v6.76H473.88Zm9-21.5v-6.63c0-7.86-.12-20.27-.36-25.8H493c-.25,5.53-.37,17.94-.37,27.39v5c0,7.86.12,20.27.37,25.8H482.48C482.72,367.58,482.84,355.17,482.84,347.31ZM487.76,368h14.49c10.2,0,15.11-3.81,15.11-10.69,0-7.74-4.79-11.91-15.84-11.91H487.76v-4.67h13.51c9.58,0,13.64-3.44,13.64-10.81,0-6.88-4.06-9.83-11.92-9.83H487.76v-5.16h17.81c12.29,0,19.29,5.9,19.29,14.25,0,6.76-4.55,12.78-16,14.13v-.74c13.39,1.11,18.79,7.25,18.79,14.86s-6.63,15.73-23.34,15.73H487.76Z"/><path class="cls-7" d="M537.14,314.88H564.9v4.3l-12.28,2.46h-2.46l-13-2.46Zm0,53.93,12.78-2.46h2.45l12.53,2.46v4.3H537.14Zm9-21.5v-6.63c0-7.86-.12-20.27-.37-25.8h9.83v58.23h-9.83C546,367.58,546.11,355.17,546.11,347.31Zm42.75-25.67h6.63l-42,44.71h-6.63Zm-11.43-6.76H605.2v4.3l-12.29,2.46h-2.45l-13-2.46Zm0,53.93,12.78-2.46h2.46l12.53,2.46v4.3H577.43Zm9.46-53.93h9.71c-.25,5.53-.37,17.94-.37,25.8v6.63c0,7.86.12,20.27.37,25.8h-9.71Z"/><path class="cls-7" d="M626.2,343c0,15.48,8.23,24,19.78,24a19.81,19.81,0,0,0,17.2-9.59l3,1.48c-3.32,10.2-11.18,15.85-22.73,15.85-16.83,0-27.39-11.8-27.39-30.59,0-19.29,13.51-30.84,28.13-30.84,10.93,0,20,6.76,21.62,15.85-.61,3.07-2.46,4.54-5.53,4.54-4.05,0-5.65-2.45-6.51-5.52l-3.07-10.81,5.65,4.54a25.56,25.56,0,0,0-11.79-3.07C633.82,318.81,626.2,327.29,626.2,343Z"/></svg>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <?php
                        $model1 = 'end';
                        $model2 = 10;
                        echo $this->render('nav', compact('model1', 'model2'));
                        ?>
                    </nav>

                    <div class="col-12 col-lg-2 text-center">
                        <a href="<?= Url::to(['/site/bell']);  ?>">
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
                        <div class="py-4">
                            <div class="row justify-content-end wrap-svg2">
                                <div class="col">
                                    <a href="<?= Url::to(['/site/index']); ?>">
                                        <svg id="Слой_1" data-name="Слой 1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 674.65 674.65"><defs><style>.cls-1{fill:url(#Безымянный_градиент_69);}.cls-2{fill:url(#Безымянный_градиент_77);}.cls-3{fill:url(#Безымянный_градиент_69-2);}.cls-4{fill:url(#Безымянный_градиент_137);}.cls-5{fill:url(#Безымянный_градиент_85);}.cls-6{fill:url(#Безымянный_градиент_76);}.cls-7{fill:#36758b;}.cls-8{fill:url(#Безымянный_градиент_123);}.cls-9{fill:url(#Безымянный_градиент_136);}.cls-10{fill:url(#Безымянный_градиент_121);}.cls-11{fill:url(#Безымянный_градиент_134);}.cls-12{fill:url(#Безымянный_градиент_77-2);}.cls-13{fill:url(#Безымянный_градиент_69-3);}.cls-14{fill:url(#Безымянный_градиент_113);}.cls-15{fill:url(#Безымянный_градиент_85-2);}.cls-16{fill:url(#Безымянный_градиент_86);}</style><linearGradient id="Безымянный_градиент_69" x1="3.92" y1="330.69" x2="94.56" y2="330.69" gradientUnits="userSpaceOnUse"><stop offset="0" stop-color="#26b3ac"/><stop offset="0.81" stop-color="#26b3ac"/></linearGradient><linearGradient id="Безымянный_градиент_77" x1="-26.91" y1="476.08" x2="276.98" y2="509.74" gradientUnits="userSpaceOnUse"><stop offset="0" stop-color="#2ba1a2"/><stop offset="0.05" stop-color="#2e939b"/><stop offset="0.11" stop-color="#318996"/><stop offset="0.13" stop-color="#308c98"/><stop offset="0.52" stop-color="#26b3ac"/><stop offset="0.67" stop-color="#26b3ac"/><stop offset="1" stop-color="#59f8df"/></linearGradient><linearGradient id="Безымянный_градиент_69-2" x1="252.04" y1="484.15" x2="342.68" y2="484.15" xlink:href="#Безымянный_градиент_69"/><linearGradient id="Безымянный_градиент_137" x1="148.38" y1="468.77" x2="365.9" y2="433.98" gradientUnits="userSpaceOnUse"><stop offset="0.04" stop-color="#2ba1a2"/><stop offset="0.2" stop-color="#2e939b"/><stop offset="0.37" stop-color="#318996"/><stop offset="0.58" stop-color="#26b3ac"/><stop offset="0.96" stop-color="#59f8df"/></linearGradient><linearGradient id="Безымянный_градиент_85" x1="216.98" y1="663.32" x2="257.92" y2="432.13" gradientUnits="userSpaceOnUse"><stop offset="0.04" stop-color="#2ba1a2"/><stop offset="0.2" stop-color="#2e939b"/><stop offset="0.37" stop-color="#318996"/><stop offset="0.65" stop-color="#26b3ac"/><stop offset="0.85" stop-color="#59f8df"/></linearGradient><linearGradient id="Безымянный_градиент_76" x1="-65.8" y1="508.55" x2="257.9" y2="545.32" gradientUnits="userSpaceOnUse"><stop offset="0" stop-color="#2ba1a2"/><stop offset="0.01" stop-color="#4baeaf"/><stop offset="0.04" stop-color="#88c8ca"/><stop offset="0.06" stop-color="#b5dbdd"/><stop offset="0.08" stop-color="#d1e7e9"/><stop offset="0.08" stop-color="#dbebed"/><stop offset="0.37" stop-color="#318996"/><stop offset="0.72" stop-color="#26b3ac"/><stop offset="0.95" stop-color="#59f8df"/></linearGradient><linearGradient id="Безымянный_градиент_123" x1="88.09" y1="468.81" x2="186.8" y2="201.23" gradientUnits="userSpaceOnUse"><stop offset="0" stop-color="#336d81"/><stop offset="0.33" stop-color="#26b3ac"/><stop offset="0.62" stop-color="#3cd1c2"/><stop offset="1" stop-color="#338192"/></linearGradient><linearGradient id="Безымянный_градиент_136" x1="119.78" y1="6.82" x2="482.52" y2="47.01" gradientUnits="userSpaceOnUse"><stop offset="0" stop-color="#26b3ac"/><stop offset="0.8" stop-color="#36758b"/><stop offset="1" stop-color="#abc5ce"/></linearGradient><linearGradient id="Безымянный_градиент_121" x1="42.76" y1="59.57" x2="430.57" y2="59.57" gradientUnits="userSpaceOnUse"><stop offset="0" stop-color="#36758b"/><stop offset="0.08" stop-color="#c4d6dd"/><stop offset="0.51" stop-color="#26b3ac"/><stop offset="0.68" stop-color="#17b6c5"/><stop offset="1" stop-color="#338192"/></linearGradient><linearGradient id="Безымянный_градиент_134" x1="374.26" y1="133.74" x2="426.28" y2="80.46" gradientUnits="userSpaceOnUse"><stop offset="0.08" stop-color="#336d81"/><stop offset="0.33" stop-color="#26b3ac"/><stop offset="0.6" stop-color="#31c2b7"/><stop offset="0.94" stop-color="#338192"/></linearGradient><linearGradient id="Безымянный_градиент_77-2" x1="5.25" y1="143.61" x2="324.15" y2="178.94" xlink:href="#Безымянный_градиент_77"/><linearGradient id="Безымянный_градиент_69-3" x1="252.04" y1="207.05" x2="342.68" y2="207.05" xlink:href="#Безымянный_градиент_69"/><linearGradient id="Безымянный_градиент_113" x1="-33.74" y1="161.22" x2="286.9" y2="225.55" gradientUnits="userSpaceOnUse"><stop offset="0" stop-color="#59f8df"/><stop offset="0.12" stop-color="#4ed9ca"/><stop offset="0.37" stop-color="#318a96"/><stop offset="0.37" stop-color="#318996"/><stop offset="0.72" stop-color="#26b3ac"/><stop offset="0.95" stop-color="#59f8df"/></linearGradient><linearGradient id="Безымянный_градиент_85-2" x1="-96.9" y1="429.32" x2="140.84" y2="267.46" xlink:href="#Безымянный_градиент_85"/><linearGradient id="Безымянный_градиент_86" x1="158.47" y1="336.28" x2="274.64" y2="203.84" gradientUnits="userSpaceOnUse"><stop offset="0.09" stop-color="#2ba1a2"/><stop offset="0.23" stop-color="#2e939b"/><stop offset="0.37" stop-color="#318996"/><stop offset="0.65" stop-color="#26b3ac"/><stop offset="0.85" stop-color="#59f8df"/></linearGradient></defs><polygon class="cls-1" points="3.92 530.15 4.66 178.65 94.56 131.23 93.82 482.73 3.92 530.15"/><polygon class="cls-2" points="252.04 529.66 19.55 515.92 93.83 476.74 341.94 482.24 252.04 529.66"/><polygon class="cls-3" points="252.78 470.41 342.68 422.99 341.94 497.89 252.04 545.31 252.78 470.41"/><polygon class="cls-4" points="342.68 422.81 252.78 470.42 237.13 469.46 327.03 421.84 342.68 422.81"/><polygon class="cls-5" points="252.04 545.31 236.41 544.39 237.15 469.46 252.78 470.41 252.04 545.31"/><polygon class="cls-6" points="236.41 544.39 3.92 530.63 3.92 515 236.56 528.74 236.41 544.39"/><polygon class="cls-7" points="118.41 675.72 119.14 46.35 209.04 -1.07 208.31 628.3 118.41 675.72"/><polygon class="cls-8" points="134.04 667.47 118.41 675.72 118.93 61.98 134.58 63.13 134.04 667.47"/><polygon class="cls-9" points="119.14 46.35 209.04 -1.07 503.57 9.74 413.67 57.16 119.14 46.35"/><polygon class="cls-7" points="413.67 57.16 503.57 9.74 502.83 84.64 412.93 132.06 413.67 57.16"/><polygon class="cls-10" points="413.51 72.78 119.12 61.98 119.14 46.35 413.67 57.16 413.51 72.78"/><polygon class="cls-11" points="412.93 132.06 397.3 131.14 397.88 71.62 413.51 72.78 412.93 132.06"/><polygon class="cls-12" points="4.66 178.65 94.56 131.23 342.68 145.89 252.78 193.31 4.66 178.65"/><polygon class="cls-13" points="252.78 193.31 342.68 145.89 341.94 220.79 252.04 268.21 252.78 193.31"/><polygon class="cls-14" points="252.77 208.95 4.66 194.32 4.66 178.69 252.77 193.31 252.77 208.95"/><polygon class="cls-15" points="19.56 515.92 3.92 515 4.66 194.29 20.3 195.24 19.56 515.92"/><polygon class="cls-16" points="252.04 268.21 236.41 267.29 237.15 207.99 252.78 208.95 252.04 268.21"/><path class="cls-7" d="M365.09,161.79h17.2v6.76h-1.23l-16-1.84Zm0,77.4,16-1.85h2.46l16,1.85v4.91h-34.4ZM376.76,206v-6.15c0-12.65,0-25.42-.37-38.08h11.79c-.36,12.41-.36,25.19-.36,38.08V206c0,12.65,0,25.43.36,38.08H376.39C376.76,231.69,376.76,218.92,376.76,206Zm5.53-44.23h41.4l.86,24.33h-6.88l-4.43-24.33,6.15,6.14h-37.1Z"/><path class="cls-7" d="M420.37,237.22c1.35-2.82,2.82-4.54,5.53-4.54,3.93,0,6.51,2.58,9.46,6h-4.18c4.91-3.94,7-7.62,9.34-15.36,2.58-8.35,4.54-22.85,4.66-37.47h6.27c-.49,15.6-2.33,30.34-5.53,40.42C441,241.77,434.37,245.7,428.6,245.7,423.56,245.7,420.37,243,420.37,237.22Zm14.13-51.35h13v6.76h-1.6l-11.42-2.46Zm13,0h22V191h-22Zm8.11,53.93,13-2.46h2.46l12.28,2.46v4.3H455.63Zm9-21.5v-6.63c0-7.86-.12-20.27-.36-25.8h10.56c-.25,5.53-.37,17.94-.37,25.8v6.63c0,7.86.12,20.27.37,25.8H464.23C464.47,238.57,464.59,226.16,464.59,218.3Zm4.92-32.43h13.88v4.3l-12.28,2.46h-1.6Z"/><path class="cls-7" d="M514.71,211.91a135.06,135.06,0,0,1,19-5.16v4.43a111.64,111.64,0,0,0-16.46,4.91c-11,4.3-12.28,9-12.28,12.53,0,6.51,4.3,9.09,10,9.09,4.3,0,6.76-1.59,14.49-7.12l2.46-1.85,1.72,2.58-3.56,3.57c-7.37,7.37-11.55,10.81-19,10.81-9,0-16.46-5.16-16.46-15.36C494.57,223.46,498.25,217.93,514.71,211.91Zm14.13,20.89v-28c0-12-3.44-15-11.55-15a28.6,28.6,0,0,0-11,2.21l4.91-3.81L508,198.77c-1.11,3.56-2.95,5.53-6.27,5.53s-5.28-1.85-5.53-4.92c2.34-9.33,11.43-15.11,23.71-15.11,12.66,0,18.8,5.78,18.8,21.26v26c0,5.53,1.72,7.49,4.54,7.49,2.09,0,3.44-1.1,4.79-2.7l2.46,2.7c-3,4.67-6.26,6.27-10.44,6.27C533.26,245.33,528.84,240.41,528.84,232.8Z"/><path class="cls-7" d="M566.8,214c0,15.48,8.23,24,19.78,24a19.83,19.83,0,0,0,17.2-9.58l2.94,1.47c-3.31,10.2-11.18,15.85-22.72,15.85-16.83,0-27.4-11.8-27.4-30.59,0-19.29,13.52-30.84,28.13-30.84,10.94,0,20,6.76,21.63,15.85-.62,3.07-2.46,4.55-5.53,4.55-4.06,0-5.65-2.46-6.51-5.53l-3.08-10.81,5.66,4.54a25.6,25.6,0,0,0-11.8-3.07C574.41,189.8,566.8,198.28,566.8,214Z"/><path class="cls-7" d="M626.5,214c0,15.48,8.23,24,19.78,24a19.83,19.83,0,0,0,17.2-9.58l2.94,1.47c-3.31,10.2-11.17,15.85-22.72,15.85-16.83,0-27.4-11.8-27.4-30.59,0-19.29,13.52-30.84,28.14-30.84,10.93,0,20,6.76,21.62,15.85-.62,3.07-2.46,4.55-5.53,4.55-4.06,0-5.65-2.46-6.51-5.53L651,188.33l5.65,4.54a25.6,25.6,0,0,0-11.8-3.07C634.12,189.8,626.5,198.28,626.5,214Z"/><path class="cls-7" d="M327.82,361v6.75l-7.62,1.72,3.07-18.18h7.5l-.49,17.82A51.76,51.76,0,0,1,305.46,375c-24.81,0-41.52-17.93-41.52-43,0-24.57,17.44-43,41.4-43a47.47,47.47,0,0,1,23.71,5.89l.49,17.82h-7.49L319,294.49l7.62,1.72v7.49c-7-6.51-13.88-8.6-19.78-8.6-16.58,0-30,12.9-30,36.86s12,36.85,29.11,36.85A34,34,0,0,0,327.82,361Z"/><path class="cls-7" d="M392.07,336.75a24.44,24.44,0,0,1-.87,6.88H345.87v-5.16h29.24c5.9,0,7.25-2.83,7.25-6.27a13.64,13.64,0,0,0-13.64-13.39c-7.86,0-17,6.63-17,24.2,0,15.6,7.86,24,20.15,24,7.86,0,12.77-3.57,17.2-8.73l2.82,2.22c-4.42,8.72-12.28,14.25-23.46,14.25-16.46,0-27.15-11.43-27.15-30.1s12.78-31.33,28-31.33C382,313.28,392.07,321.88,392.07,336.75Z"/><path class="cls-7" d="M432.73,398.29v4.3H401.28v-4.3l13.88-2.45h2.46ZM411.6,341.54c0-6.76-.13-10.57-.37-15.48L401.4,325v-4.3l16.71-7.37,1.84,1.23,1,10.44.49.25v38.33l-.37.73v12.29c0,8.6.13,17.44.37,26H411.23q.36-12.9.37-25.8ZM436.66,320C432.11,320,426,322.25,417,331l-1.1-2.21C423,318,431,313.28,439.36,313.28c13,0,23.34,11.55,23.34,30.47s-10.81,31-25.18,31c-7.5,0-15.11-3.44-21.62-16.22l1.1-2c6.39,8.11,12.29,11.43,18.31,11.43,9.33,0,16.95-7.25,16.95-23.1S445.75,320,436.66,320Z"/><path class="cls-7" d="M473.88,314.88h13.88v6.76h-.86l-13-2.46Zm0,53.93,13-2.46h.86v6.76H473.88Zm9-21.5v-6.63c0-7.86-.12-20.27-.36-25.8H493c-.25,5.53-.37,17.94-.37,27.39v5c0,7.86.12,20.27.37,25.8H482.48C482.72,367.58,482.84,355.17,482.84,347.31ZM487.76,368h14.49c10.2,0,15.11-3.81,15.11-10.69,0-7.74-4.79-11.91-15.84-11.91H487.76v-4.67h13.51c9.58,0,13.64-3.44,13.64-10.81,0-6.88-4.06-9.83-11.92-9.83H487.76v-5.16h17.81c12.29,0,19.29,5.9,19.29,14.25,0,6.76-4.55,12.78-16,14.13v-.74c13.39,1.11,18.79,7.25,18.79,14.86s-6.63,15.73-23.34,15.73H487.76Z"/><path class="cls-7" d="M537.14,314.88H564.9v4.3l-12.28,2.46h-2.46l-13-2.46Zm0,53.93,12.78-2.46h2.45l12.53,2.46v4.3H537.14Zm9-21.5v-6.63c0-7.86-.12-20.27-.37-25.8h9.83v58.23h-9.83C546,367.58,546.11,355.17,546.11,347.31Zm42.75-25.67h6.63l-42,44.71h-6.63Zm-11.43-6.76H605.2v4.3l-12.29,2.46h-2.45l-13-2.46Zm0,53.93,12.78-2.46h2.46l12.53,2.46v4.3H577.43Zm9.46-53.93h9.71c-.25,5.53-.37,17.94-.37,25.8v6.63c0,7.86.12,20.27.37,25.8h-9.71Z"/><path class="cls-7" d="M626.2,343c0,15.48,8.23,24,19.78,24a19.81,19.81,0,0,0,17.2-9.59l3,1.48c-3.32,10.2-11.18,15.85-22.73,15.85-16.83,0-27.39-11.8-27.39-30.59,0-19.29,13.51-30.84,28.13-30.84,10.93,0,20,6.76,21.62,15.85-.61,3.07-2.46,4.54-5.53,4.54-4.05,0-5.65-2.45-6.51-5.52l-3.07-10.81,5.65,4.54a25.56,25.56,0,0,0-11.79-3.07C633.82,318.81,626.2,327.29,626.2,343Z"/></svg>
                                    </a>
                                </div>
                            </div>
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
                                        <?= $main[1][text] ?>  <?= $main[2][text] ?>
                                    </div>
                                    <div class="col col-lg-4">
                                        <a href="<?= Url::to(['/site/bell']); ?>">
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
