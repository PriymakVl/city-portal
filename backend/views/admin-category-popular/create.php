<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\CategoryPopularModel */

$this->title = 'Create Category Popular Model';
$this->params['breadcrumbs'][] = ['label' => 'Category Popular Models', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="category-popular-model-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
