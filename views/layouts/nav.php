<?php

use yii\helpers\Url;
?>


<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggler1"
        aria-controls="navbarToggler1" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
</button>

<div class="collapse navbar-collapse justify-content-<?= "$model1" ?> col-12 col-lg-<?= "$model2" ?>" id="navbarToggler1">
    <div class="navbar-nav text-center text-lg-right">
        <a class="nav-item nav-link active" href="#"><i class="fa fa-home" aria-hidden="true" style="color: #999; font-size:24px;"></i></a>

        <a class="nav-item nav-link  mx-2" href="<?= Url::to(['/site/about']); ?>">О компании</a>

        <div class="dropdown  mx-2">                                    
            <a class="nav-item nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" 
               aria-haspopup="true" aria-expanded="false">Продукция 
            </a>
            <div class="dropdown-menu">
                <a class="dropdown-item" href="#">Закаленное стекло</a>
                <a class="dropdown-item" href="#">Пожаростойкое стекло</a>
            </div>
        </div>
        <div class="dropdown mx-2">                                    
            <a class="nav-item nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" 
               aria-haspopup="true" aria-expanded="false">Услуги</a>
            <div class="dropdown-menu">
                <a class="dropdown-item" href="#">Резка стекла</a>
                <a class="dropdown-item" href="#">Обработка кромки стекла</a>
                <a class="dropdown-item" href="#">Технологические вырезы в стекле</a>
                <a class="dropdown-item" href="#">Сверление отверстий / зенковка</a>
                <a class="dropdown-item" href="#">Закалка стекла</a>
                <a class="dropdown-item" href="#">Фацет</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#">Доставка</a>
            </div>
        </div>
        <a class="nav-item nav-link  mx-2" href="#">Контакты</a>
    </div>
</div>
</nav>

