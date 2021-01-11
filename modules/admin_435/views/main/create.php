<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\db\Main */

$this->title = 'Создать новую запись';
$this->params['breadcrumbs'][] = ['label' => 'Mains', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="main-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
