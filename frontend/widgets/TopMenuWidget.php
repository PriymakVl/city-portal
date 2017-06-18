<?php

namespace frontend\widgets;

use Yii;
use yii\base\Widget;

class TopMenuWidget extends Widget {

    public function run()
    {    
        return $this->render("top_menu");
    }

}

