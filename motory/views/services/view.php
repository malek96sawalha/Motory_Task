<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/** @var yii\web\View $this */
/** @var app\models\services $model */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Services', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="services-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>
    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            [
                'attribute' => 'category_id',
                'label' => 'Category',
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
                    return Html::img(Yii::getAlias('@web/' . $model->image), ['alt' => 'Image', 'style' => 'width:250px;']);
                },  
            ], // <-- Missing closing bracket for 'image' attribute
        ],
    ]) ?>
</div>