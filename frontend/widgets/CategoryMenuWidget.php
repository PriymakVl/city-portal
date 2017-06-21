<?php

namespace frontend\widgets;

use Yii;
use yii\base\Widget;
use common\models\CategoryModel;

class CategoryMenuWidget extends Widget {

    public $cat;
    public $sub;
    
    public function run()
    {    
        $cats = CategoryModel::getByIdParent($this->cat->id, true);
        if ($sub) return $this->render("cat_sub_menu", ['cats' => $cats]);
        return $this->render("cat_main_menu", ['cats' => $cats]);
    }

}

