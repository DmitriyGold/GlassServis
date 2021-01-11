<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\db\Promotions */

$this->title = 'Создать акцию';
$this->params['breadcrumbs'][] = ['label' => 'Promotions', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="promotions-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
