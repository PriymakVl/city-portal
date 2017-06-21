<?php

namespace common\models;

use Yii;
use yii\db\ActiveRecord;
use yii\helpers\StringHelper;
use yii\web\ForbiddenHttpException;
use yii\data\Pagination;
use common\classes\interfaces\ConfigApp; 
//use app\classes\traits\CommonStaticMethods;

class BaseModel extends ActiveRecord implements ConfigApp
{
    
    public static $pages;
    public $children;
    //use CommonStaticMethods;
    
    public static function getOne($id, $default, $status)
    {
        $obj = self::findOne(['id' => $id, 'status' => $status]);
        if ($obj) return $obj;
        else if ($default === false) throw new ForbiddenHttpException('error '.__METHOD__);
        else if ($default === null) return $default;
        else throw new ForbiddenHttpException('error '.$default);; 
    }
    
    public static function getAll()
    {
        return self::findAll(['status' => self::STATUS_ACTIVE]);
    }
    
    public static function getMain()
    {
        return self::findAll(['status' => self::STATUS_ACTIVE, 'parent_id' => 0]);    
    }
    
    public static function getList($params = [], $page_size)
    {
        $query = self::find()->where($params);
        self::$pages = new Pagination(['totalCount' => $query->count(), 'pageSize' => $page_size]);
        return $query->offset(self::$pages->offset)->limit(self::$pages->limit)->all();    
    }
    
    public function deleteOne()
    {
        $this->status = self::STATUS_INACTIVE;
        return $this->save();
    }
    
    
    public static function  changeParent($objects, $parent_id)
    {
        foreach ($objects as $obj) {
            $obj->parent_id = $parent_id;
            $$obj->save();
        }     
    }
    
    public static function executeMethods($array, $methods)
    {
        if (!is_array($array)) return false;
        foreach ($methods as $method) {
            foreach ($array as $object) {
                $object->$method();
            }
        } 
        return $array;      
    }
    
    public function checkChildren()
    {
        $classname = get_class($this);
        $child = $classname::find()->where(['parent_id' => $obj->id, 'status' => self::STATUS_ACTIVE])->one();
        if ($child) $this->children = true;
    }
    

    
}





