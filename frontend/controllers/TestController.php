<?php

namespace frontend\controllers;

class TestController extends \yii\web\Controller
{
    public function actionIndex()
    {
        debug('test');
        return $this->render('index');
    }

}
