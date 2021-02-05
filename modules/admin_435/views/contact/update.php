<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\db\Contact */

$this->title = 'Изменить запись: ' . $model->title;

?>
<div class="contact-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
