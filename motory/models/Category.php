<?php

namespace app\models;

use Yii;
use yii\web\UploadedFile;

/**
 * This is the model class for table "category".
 *
 * @property int $id
 * @property string $name
 * @property string|null $image
 *
 * @property Services[] $services
 */
class Category extends \yii\db\ActiveRecord
{
    /**
     * @var UploadedFile
     */
    public $imageFile;

    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'category';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['name'], 'required'],
            [['name'], 'string', 'max' => 255],
            [['imageFile'], 'file', 'skipOnEmpty' => true, 'extensions' => 'png, jpg, jpeg'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'image' => 'Image',
            'imageFile' => 'Upload Image', // Add a label for the image file
        ];
    }

    /**
     * Gets query for [[Services]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getServices()
    {
        return $this->hasMany(Services::class, ['category_id' => 'id']);
    }

    /**
     * Handles the upload of the image file.
     *
     * @return bool
     */
public function upload()
{
    if ($this->validate()) {
        $uploadPath = 'uploads/category/';
        if (!is_dir($uploadPath)) {
            mkdir($uploadPath, 0777, true);
        }

        $fileName = $this->imageFile->baseName . '.' . $this->imageFile->extension;
        $filePath = $uploadPath . $fileName;

        // Move the uploaded file to the destination path
        if ($this->imageFile->saveAs($filePath)) {
            // Update the image attribute with the file path
            $this->image = $filePath;

            // Clear the UploadedFile attribute to avoid saving it again
            $this->imageFile = null;

            // Save the model without validating it again
            return $this->save(false);
        }
    }

    return false;
}





}

 