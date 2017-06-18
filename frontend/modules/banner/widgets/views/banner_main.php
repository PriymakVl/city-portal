<div class="col-lg-3 sidebar-wrp">
    <? foreach ($banners as $banner): ?>
        <div class="col-md-12">
            <a href="#" class="thumbnail">
                <img src="/img/banners/<?=$banner->file?>" alt="..." />
            </a>
        </div> 
    <? endforeach; ?>
</div><!-- .col-lg-3 sidebar-wrp -->