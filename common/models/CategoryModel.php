<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "categories".
 *
 * @property integer $id
 * @property string $name
 * @property string $alias
 * @property integer $parent_id
 * @property integer $status
 */
class CategoryModel extends \common\models\BaseModel
{
    public $file;
    
    public static function tableName()
    {
        return 'categories';
    }

    public function rules()
    {
        return [
            [['name', 'alias'], 'required'],
            [['parent_id', 'status'], 'integer'],
            ['parent_id', 'default', 'value' => 0],
            ['status', 'default', 'value' => 1],
            [['name'], 'string', 'max' => 200],
            [['alias'], 'string', 'max' => 100],
        ];
    }

    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'alias' => 'Alias',
            'parent_id' => 'Parent ID',
            'status' => 'Status',
        ];
    }
}
