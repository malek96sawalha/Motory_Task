<?php

use app\models\services;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;

/** @var yii\web\View $this */
/** @var app\models\servicesSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = 'Services';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="services-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Services', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>
    <?= GridView::widget([
    'dataProvider' => $dataProvider,
    'filterModel' => $searchModel,
    'columns' => [
        ['class' => 'yii\grid\SerialColumn'],
        'id',
        [
            'attribute' => 'category_id',
            'value' => function ($model) {
                return $model->category->id . ' - ' . $model->category->name;
            },
        ],
        'name',
        'price',
        'warranty',
        [
                  'attribute' => 'image',
                'format' => 'html',
                'value' => function ($model) {
                    return Html::img(Yii::getAlias('@web/' . $model->image), ['alt' => 'Image', 'style' => 'width:50px;']);
                },
            ],
        
        [
            
            
            'class' => ActionColumn::className(),
            'urlCreator' => function ($action, services $model, $key, $index, $column) {
                return Url::toRoute([$action, 'id' => $model->id]);
            },
        ],
    ],
]); ?>



</div>