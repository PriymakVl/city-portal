<?php

/* @var $this yii\web\View */

use backend\widgets\AdminMainMenuWidget;

$this->title = 'Админка - главная';
?>
<div class="conteiner">
    <div class="row">
        <div class="col-lg-3">
            <?=AdminMainMenuWidget::widget()?>
        </div>
        <div class="col-lg-9"></div>
    </div>  
</div>
