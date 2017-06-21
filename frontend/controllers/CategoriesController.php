<?php

namespace frontend\controllers;

use Yii;
use common\models\CategoryModel;


class CategoriesController extends BaseController
{
    public $layout = "@frontend/views/layouts/basic";
          
    public function actionIndex($cat_id) 
    {   
        $cat = CategoryModel::getOne($cat_id);
        //if ($cat->parent_id == 0) return $this->render('index', ['cat' => $cat]);
        return $this->render('menu_filter', ['cat' => $cat]);
    }
      
}