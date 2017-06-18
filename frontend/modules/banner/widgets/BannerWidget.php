<?php

namespace frontend\modules\banner\widgets;

use yii\base\Widget;
use common\models\BannerModel;

class BannerWidget extends Widget 
{

    public function run()
    {
        $banners = BannerModel::getMain();
        return $this->render('banner_main', ['banners' => $banners]);
    }

}

