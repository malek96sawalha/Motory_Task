<?php

namespace app\models;
use yii\web\UploadedFile;

use Yii;

/**
 * This is the model class for table "services".
 *
 * @property int $id
 * @property int $category_id
 * @property string $name
 * @property float $price
 * @property int|null $warranty
 * @property string|null $image
 *
 * @property Category $category
 */
class Services extends \yii\db\ActiveRecord
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
        return 'services';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['category_id', 'name', 'price'], 'required'],
            [['category_id', 'warranty'], 'integer'],
            [['price'], 'number'],
            [['imageFile'], 'file', 'skipOnEmpty' => true, 'extensions' => 'png, jpg, jpeg'],
            [['name'], 'string', 'max' => 255],
            [['category_id'], 'exist', 'skipOnError' => true, 'targetClass' => Category::class, 'targetAttribute' => ['category_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'category_id' => 'Category ID',
            'name' => 'Name',
            'price' => 'Price',
            'warranty' => 'Warranty',
             'image' => 'Image',
            'imageFile' => 'Upload Image', // Add a label for the image file
        ];
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


    /**
     * Gets query for [[Category]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCategory()
    {
        return $this->hasOne(Category::class, ['id' => 'category_id']);
    }



    
}