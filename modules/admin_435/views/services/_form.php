<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\db\Services */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="services-form">


    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'description')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'subtitle_1')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'detailed_text1')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'subtitle_2')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'detailed_text2')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'subtitle_3')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'detailed_text3')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'hide')->checkbox() ?>

    <div class="col-3">
        <?=
        $form->field($model, 'sort')->dropDownList([
            '1' => 'да',
            '2' => 'нет',
        ])
        ?> 
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
