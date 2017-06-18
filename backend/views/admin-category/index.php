<?php

use yii\helpers\Html;
use yii\grid\GridView;
use backend\widgets\AdminMainMenuWidget;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Category Models';
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="conteiner">
    <div class="row">
        <div class="col-lg-3">
            <!-- main menu -->
            <?=AdminMainMenuWidget::widget()?>
        </div><!-- /.col-lg-3 -->
        <div class="col-lg-9">
            <p>
                <?= Html::a('Create Category Model', ['create'], ['class' => 'btn btn-success']) ?>
            </p>
            <?= GridView::widget([
                'dataProvider' => $dataProvider,
                'columns' => [
                    ['class' => 'yii\grid\SerialColumn'],
                    'id',
                    'name',
                    'alias',
                    'parent_id',
                    //'status',
                    ['class' => 'yii\grid\ActionColumn'],
                ],
            ]); ?>
        </div><!-- /.col-lg-9 -->
    </div><!-- /.row --> 
</div><!-- /.conteiner --> 


