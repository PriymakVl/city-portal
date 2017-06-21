<?php

use yii\web\JqueryAsset;
use yii\helpers\Url;
use frontend\modules\banner\widgets\BannerWidget; 
use yii\helpers\Html;
    
$this->registerCssFile('/css/main.css');
//$this->registerJsFile('/js/object/object_copy.js', ['depends' => [JqueryAsset::className()]]);

?>

<div class="main-content-wrp row" >
        
        <!-- popular categories -->
        <div class="col-lg-9 popular-wrp">
            <div class="row">
                <? foreach ($popular as $cat): ?>
                    <div class="col-xs-6 col-md-3">
                        <a href="<?=Url::to(['/categories', 'cat_id' => $cat->id])?>" class="thumbnail">
                            <img src="/img/categories/<?=$cat->file?>" alt="..." title="<?=$cat->name?>" />
                        </a>
                    </div>
                <? endforeach; ?>
            </div><!-- /.row -->
        </div><!-- /.col-lg-9 popular-wrp -->
        
        <!-- right sidebar main -->
        <?=BannerWidget::widget()?>

</div><!-- /.main-content-wrp row -->