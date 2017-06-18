<?php
use \yii\helpers\Url;
?>

<div class="list-group">
    <a href="<?=Url::to('admin/category')?>" class="list-group-item">Категории</a>
    <a href="<?=Url::to('admin/category/popular')?>" class="list-group-item">Популярные категории</a>
    <a href="<?=Url::to('admin/category/image')?>" class="list-group-item">Изображение категорий</a>
</div>