<?php

namespace frontend\controllers;

use Yii;
use frontend\controllers\BaseController;
use common\models\CategoryPopularModel;


class MainController extends BaseController 
{
    public $layout = "@frontend/views/layouts/basic";
          
    public function actionIndex() 
    {   
        
        $popular = CategoryPopularModel::get();
        //debug($popular);
        return $this->render('index', ['popular' => $popular]);
    }
      
}