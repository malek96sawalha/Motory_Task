<?php
use yii\helpers\Html;
use yii\widgets\DetailView;
/** @var yii\web\View $this */

$this->title = 'My Yii Application';
?>
<div class="contenar ">
    <?= Html::tag('button', Html::a('Motory page', ['/site/motory'], ['class' => 'btn btn-primary']), ['class' => 'list-item']) ?>
    <?= Html::tag('button', Html::a('Category page', ['/category/index'], ['class' => 'btn btn-primary']), ['class' => 'list-item']) ?>
    <?= Html::tag('button', Html::a('Services page', ['/services/index'], ['class' => 'btn btn-primary']), ['class' => 'list-item']) ?>
</div>