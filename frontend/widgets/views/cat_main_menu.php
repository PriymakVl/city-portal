<? foreach ($cats as $cat): ?>
    <div class="panel panel-default">
        <div class="panel-heading">
            <h4 class="panel-title">
                <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
                    <span class="glyphicon glyphicon-folder-close"></span>
                    <?=$cat->name?>
                </a>
            </h4>
        </div>
        <? if ($cat->children): ?>
            <?=\frontend\widgets\CategoryMenuWidget::widget(['cat' => $cat, 'sub' => true])?>
        <? endif; ?>
    </div>
<? endforeach; ?>