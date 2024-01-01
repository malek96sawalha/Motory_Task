<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\ArrayHelper;

/** @var yii\web\View $this */
/** @var app\models\Services $model */
/** @var array $categories */
$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Services', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);


$form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]);
echo $form->field($model, 'category_id')->dropDownList(
    ArrayHelper::map($categories, 'id', function ($category) {
        return $category->id . ' - ' . $category->name;
    }),
    ['prompt' => 'Choose a Category']
);

echo $form->field($model, 'name')->textInput(['maxlength' => true]);

echo $form->field($model, 'price')->textInput(['maxlength' => true]);

echo $form->field($model, 'warranty')->textInput();

echo Html::submitButton('Update', ['class' => 'btn btn-primary']);

ActiveForm::end();
?>