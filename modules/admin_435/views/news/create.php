<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\db\News */

$this->title = 'Создать новость';
$this->params['breadcrumbs'][] = ['label' => 'News', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="news-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
