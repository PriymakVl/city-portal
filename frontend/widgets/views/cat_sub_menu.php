<div id="collapseOne" class="panel-collapse collapse in">
    <div class="panel-body">
        <table class="table">
            <? foreach ($cats as $cat): ?>
                <tr>
                    <td>
                        <span class="glyphicon glyphicon-pencil text-primary"></span>
                        <a href="#"><?=$cat->name?></a>
                    </td>
                </tr>
            <? endforeach; ?>
        </table>
    </div>
</div>
