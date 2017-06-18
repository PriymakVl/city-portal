<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "banners".
 *
 * @property integer $id
 * @property integer $user_id
 * @property string $file
 * @property string $date_create
 * @property string $date_update
 * @property integer $rating
 * @property integer $status
 */
class BannerModel extends \common\models\BaseModel
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'banners';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['user_id', 'rating', 'status'], 'integer'],
            [['file', 'date_create'], 'required'],
            [['file'], 'string', 'max' => 255],
            [['date_create', 'date_update'], 'string', 'max' => 100],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'user_id' => 'User ID',
            'file' => 'File',
            'date_create' => 'Date Create',
            'date_update' => 'Date Update',
            'rating' => 'Rating',
            'status' => 'Status',
        ];
    }
    
    public static function getMain()
    {
        return self::find()->where(['status' => self::STATUS_ACTIVE])->orderBy(['rating' => SORT_DESC, 'date_create' => SORT_DESC])
            ->limit(2)->all();
    }
}
