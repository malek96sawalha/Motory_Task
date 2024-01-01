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

// Image Upload
echo $form->field($model, 'imageFile')->fileInput(['id' => 'imageFile']);

// Image Preview
echo '<div class="new-image-preview" style="display:none;">';
    echo '<p><strong>New Image Preview:</strong></p>';
    echo Html::img('', ['alt' => 'Image', 'style' => 'width:150px; margin:50px', 'class' => 'img-thumbnail', 'id' =>
    'showImage']);
    echo '</div>';

// JavaScript to preview the selected image
$this->registerJs("
$('#imageFile').change(function(e) {
var reader = new FileReader();
reader.onload = function(e) {
$('#showImage').attr('src', e.target.result).show();
}
reader.readAsDataURL(e.target.files[0]);
$('.new-image-preview').show();
});
");


echo Html::submitButton('Create', ['class' => 'btn btn-success']);

ActiveForm::end();