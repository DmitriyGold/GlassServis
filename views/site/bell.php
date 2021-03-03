<?php
/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\LoginForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = "Заказать звонок";
?>
<div class="site-login container">

    <h1><?= Html::encode($this->title) ?></h1>

    <div class="row line-bottom-1 mb-4"></div>   

    <h5>Пожалуйста, заполните следующие поля:</h5>

    <?php
    $form = ActiveForm::begin([
                'id' => 'letter-form',
                'layout' => 'horizontal',
                'fieldConfig' => [
                    'template' => "{label}\n<div class=\"col\">{input}</div>\n<div class=\"col\">{error}</div>",
                ],
    ]);
    ?>

    <?= $form->field($model, 'username')->textInput(['autofocus' => true]) ?>
    <?= $form->field($model, 'phone')->textInput() ?>   
    <?= $form->field($model, 'message')->textarea(['rows' => 3]) ?>   


    <div class="row">
        <div class="col">* - поле обязательное для заполнения</div>
    </div>

    <div class="row my-3">
        <div class="col">
            <div class="form-group">
                <?= Html::submitButton('Сохранить', ['name' => 'bell-button', 'class' => 'btn btn-success', 'style' => 'width: 120px;']) ?>        
                <?= Html::a(Yii::t('app', 'Отмена'), ['index'], ['class' => 'btn btn-primary', 'style' => 'width: 120px;']) ?>        
            </div>
        </div>
    </div>

    <?php ActiveForm::end(); ?>


</div>


