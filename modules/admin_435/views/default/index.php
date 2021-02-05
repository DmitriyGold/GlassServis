<?php

use yii\helpers\Url;

$this->title = 'АДМИНИСТРАТИВНАЯ ЧАСТЬ';
$this->params['breadcrumbs'][] = '';
?>

<div class="admin_435-default-index">
    <div class="row">
        <h1>Административная панель</h1>
    </div>

    <div  class="alert alert-success container" role="alert">
        <h6>Все загружаемые фото и картинки должны быть оптимизированы для сайта (уменьшен размер файла)!</h6>
        <p>Например можно воспользоваться сервисом сжатия онлайн:</p>
        <a href="<?= Url::to('https://www.iloveimg.com/ru/compress-image') ?>"  target="target_blank">Сервис сжатия >></a>
    </div>

    <div class="container my-2">
        <strong><a href = "<?= Url::to('admin_435/main/index') ?>">Главный экран.</a></strong>
    </div>

    <div class="container my-2">
        <strong><a href = "<?= Url::to('admin_435/news/index') ?>">Новости.</a></strong>
    </div>

    <div class="container my-2">
        <strong><a href = "<?= Url::to('admin_435/promotions/index') ?>">Акции.</a></strong>
    </div>
    
        <div class="container my-2">
        <strong><a href = "<?= Url::to('admin_435/services/index') ?>">Продукция и услуги.</a></strong>
    </div>

            <div class="container my-2">
        <strong><a href = "<?= Url::to('admin_435/contact/index') ?>">Страница контактов.</a></strong>
    </div>
    

</div>
