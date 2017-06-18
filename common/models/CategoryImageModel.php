<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "category_images".
 *
 * @property integer $id
 * @property integer $cat_id
 * @property string $file
 * @property integer $user_id
 * @property integer $state
 * @property integer $status
 */
class CategoryImageModel extends \common\models\BaseModel
{
    const STATE_DEFAULT = 1;

    public static function tableName()
    {
        return 'category_images';
    }


    public function rules()
    {
        return [
            [['cat_id', 'file'], 'required'],
            [['cat_id', 'user_id', 'state', 'status'], 'integer'],
            [['file'], 'string', 'max' => 200],
        ];
    }

    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'cat_id' => 'Cat ID',
            'file' => 'File',
            'user_id' => 'User ID',
            'state' => 'State',
            'status' => 'Status',
        ];
    }
    
    public static function getOneImage($categories)
    {
        foreach ($categories as $cat) {
            $result = self::find()->select('file')->where(['cat_id' => $cat->id])->column();
            if ($result) $cat->file = $result[0];
        }
        return $categories;
    }
}
