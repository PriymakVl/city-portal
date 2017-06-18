<?php

use yii\helpers\Html;
use yii\grid\GridView;
use backend\widgets\AdminMainMenuWidget;

/* @var $this yii\web\View */
/* @var $searchModel backend\models\AdminCategoryPopularSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Category Popular Models';
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="conteiner">
    <div class="row">
        <div class="col-lg-3">
            <!-- main menu -->
            <?=AdminMainMenuWidget::widget()?>
        </div><!-- /.col-lg-3 -->
        <div class="col-lg-9">
            <?php // echo $this->render('_search', ['model' => $searchModel]); ?>
            <p>
                <?= Html::a('Create Category Popular Model', ['create'], ['class' => 'btn btn-success']) ?>
            </p>
            <?= GridView::widget([
                'dataProvider' => $dataProvider,
                'filterModel' => $searchModel,
                'columns' => [
                    ['class' => 'yii\grid\SerialColumn'],
        
                    'id',
                    'cat_id',
                    'user_id',
                    'status',
        
                    ['class' => 'yii\grid\ActionColumn'],
                ],
            ]); ?>
        </div><!-- /.col-lg-9 -->
    </div><!-- /.row -->
</div><!-- /.conteiner -->
