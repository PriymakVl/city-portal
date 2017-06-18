<?php

namespace frontend\modules\banner\controllers;

use yii\web\Controller;

/**
 * Default controller for the `banner` module
 */
class BannerController extends Controller
{
    /**
     * Renders the index view for the module
     * @return string
     */
    public function actionIndex()
    {
        return $this->render('index');
    }
}
