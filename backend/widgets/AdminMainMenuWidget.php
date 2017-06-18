<?php

namespace backend\widgets;

use Yii;
use yii\base\Widget;

class AdminMainMenuWidget extends Widget {

    public function run()
    {    
        return $this->render("admin_main_menu");
    }

}

