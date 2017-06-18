<?php

namespace frontend\controllers;

use Yii;
use yii\web\Controller;

class BaseController extends Controller
{

    //public $layout = 'basic';

    //use CommonStaticMethods;
    
    public function behavior()
    {
        return ['base-logic' => ['class' => BaseLogic::className()]];
    }
    
    
}