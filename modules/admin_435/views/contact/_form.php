<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\db\Contact */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="contact-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'detailed_text')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'hide')->checkbox() ?>

    <div class="row justify-content-start text-left align-items-end">

        <p>Сортировка записи на странице. 1 - первая на странице. 10 - последняя</p>
        
        <div class="col-3">
            <?=
            $form->field($model, 'sort')->dropDownList([
                '1' => 1,
                '2' => 2,
                '3' => 3,
                '4' => 4,
                '5' => 5,
                '6' => 6,
                '7' => 7,
                '8' => 8,
                '9' => 9,
                '10' => 10
            ])
            ?> 
        </div>
        <div class="col-2">
            <?= $form->field($model, 'hide')->checkbox() ?>
        </div>
    </div>

    <div class="row">
        <div class="col">
            <div class="form-group">
                <?= Html::submitButton('Сохранить', ['name' => 'ok', 'class' => 'btn btn-success']) ?>        
                <?= Html::a(Yii::t('app', 'Отмена'), ['index'], ['class' => 'btn btn-primary']) ?>        
            </div>
        </div>
    </div>

    <?php ActiveForm::end(); ?>

</div>
