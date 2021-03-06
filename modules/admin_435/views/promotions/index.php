<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Акции';
?>
<div class="promotions-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
       <?= Html::a('создать акцию', ['create'], ['class' => 'btn btn-success']) ?>
    </p>


    <?= GridView::widget([
      'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            //'id',
            'title',
            'short_text:ntext',
            'detailed_text:ntext',
            [
                'format' => 'html', //  вывод своей картинки
                'label' => '',
                'value' => function($data) {
                    return Html::img($data->getImage(), ['width' => 200]);
                }
            ],
            //'imagePath',
            'dateStart',
            'dateEnd',
            [
                'attribute' => 'hide',
                'label' => 'скрыть',
                'value' => function($data) {
                    return $data->getHide();
                }
            ],
            [
                'attribute' => 'archive',
                'label' => 'архив ',
                'value' => function($data) {
                    return $data->getArchive();
                }
            ],
            //'archive',
            [
                'class' => 'yii\grid\ActionColumn',
                'header' => 'Действия',
                'headerOptions' => ['style' => 'width: 120px; color: #007bff'],
                'template' => '{view} {update} {delete}',
                'buttons' => [
                    'view' => function ($url, $model) {
                        return Html::a(
                                        '<span class="p-1"><i class="fa fa-eye" aria-hidden="true"></i></span>', $url);
                    },
                    'update' => function ($url, $model) {
                        return Html::a(
                                        '<span class="p-1"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></span>', $url);
                    },
                    'delete' => function ($url, $model) {
                        return Html::a(
                                        '<span class="p-1"><i class="fa fa-trash-o" aria-hidden="true"></i></span>', $url, ['title' => 'Удалить',
                                    'aria-label' => 'Удалить',
                                    'data-pjax' => '0',
                                    'data-confirm' => 'Вы уверены, что хотите удалить этот элемент?',
                                    'data-method' => 'post'
                        ]);
                    },
                ],
            ],
        ],
    ]);
    ?>

</div>
