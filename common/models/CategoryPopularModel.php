<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "category_popular".
 *
 * @property integer $id
 * @property integer $cat_id
 * @property integer $user_id
 * @property integer $status
 */
class CategoryPopularModel extends \common\models\BaseModel
{

    public static function tableName()
    {
        return 'category_popular';
    }

    public function rules()
    {
        return [
            [['cat_id'], 'required'],
            [['cat_id', 'user_id', 'status'], 'integer'],
        ];
    }

    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'cat_id' => 'Cat ID',
            'user_id' => 'User ID',
            'status' => 'Status',
        ];
    }
    
    public static function get($user_id = self::USER_ID_DEFAULT)
    {
        $ids = self::find()->select('id')->where(['user_id' => $user_id, 'status' => self::STATUS_ACTIVE])->column();
        $cats = CategoryModel::findAll($ids);
        return CategoryImageModel::getOneImage($cats);
    }
}