<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/** @var yii\web\View $this */
/** @var app\models\Category $model */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Categories', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title ;
\yii\web\YiiAsset::register($this);
$form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]);

echo $form->field($model, 'name')->textInput(['maxlength' => true]);

// Existing Image
if ($model->image) {
    echo '<div class="image-container" style="display: flex; align-items: center;">';
    echo '<div class="image-item" style="width: 40%; margin: 50px;">';
    echo '<p><strong>Existing Image:</strong></p>';
    echo Html::img(Yii::getAlias('@web/' . $model->image), ['alt' => 'Image', 'class' => 'img-thumbnail', 'style' => 'width:70%;']);
    echo '</div>';
}

// Image Upload
echo $form->field($model, 'imageFile')->fileInput(['id' => 'imageFile']);

// Image Preview
if (!$model->isNewRecord && $model->image) {
    echo '<div class="new-image-preview" style="width: 40%; margin: 50px;">';
    echo '<p><strong>New Image Preview:</strong></p>';
    echo Html::img(Yii::getAlias('@web/uploads/no.png'), ['alt' => 'Image', 'class' => 'img-thumbnail', 'style' => 'width:70%;', 'id' => 'showImage']);
    echo '</div>';
 
}

// JavaScript to preview the selected image
$this->registerJs("
$('#imageFile').change(function(e) {
var reader = new FileReader();
reader.onload = function(e) {
$('#showImage').attr('src', e.target.result).show();
}
reader.readAsDataURL(e.target.files[0]);
});
");

echo Html::submitButton('Update', ['class' => 'btn btn-primary']);

ActiveForm::end();

?>