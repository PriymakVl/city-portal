<?php

use yii\web\JqueryAsset;
use yii\helpers\Url;
use frontend\widgets\CategoryMenuWidget; 
use yii\helpers\Html;
    
$this->registerCssFile('/css/main.css');
//$this->registerJsFile('/js/object/object_copy.js', ['depends' => [JqueryAsset::className()]]);

?>

<div class="row category-content-wrp" >
    <!-- category menu -->
    <div class="col-lg-3 category-menu-wrp">
        <div class="panel-group" id="accordion">
            <?=CategoryMenuWidget::widget(['cat' => $cat])?>   
        </div><!-- /#accordion -->
    </div><!-- /.category-menu-wrp -->
        
    <!-- category filter -->
    <div class="col-lg-9 category-filter-wrp">
        <p>filter</p> 
    </div><!-- /.category-filter-wrp -->
</div><!-- /.category-content-wrp-->
