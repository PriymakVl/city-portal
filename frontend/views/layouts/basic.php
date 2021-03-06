<?php
use yii\helpers\Html;
use frontend\assets\AppAsset;
use frontend\widgets\TopMenuWidget;

$this->title = 'Каменское';

AppAsset::register($this);
?>

<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>" />
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>
    <div class="wrapper">
        <!-- top menu -->
        <?=TopMenuWidget::widget()?>
        
        <div class="panel panel-default container" style="width: 980px;">
            <div class="panel-body"> 
        
                <?=$content?>
            
            </div>
            <div class="panel-footer">Panel footer</div>
        </div>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
                                                                                                                                                                        