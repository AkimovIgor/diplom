<div class="breadcrumbs">
    <ul class="clearfix">
        <li><a href="<?=PATH;?>">Главная</a></li>
        <li><?=$category['title'];?></li>
    </ul>
</div>
<div class="cols col-12">
    <div class="post-box clearfix">
        <?php if(!empty($gallery)): ?>
            <?php $count = count($gallery); $i = 0; ?>
            <h1 class="text-center large-size-text mb-40 upper"><?=$category['title'];?></h1>
            <?php foreach($gallery as $photo): ?>
                <?php $i++; $count--;?>
                <?php if($i % 4 == 0): ?>
                    <div class="<?php if($count == 0) echo 'last-article';?> clearfix">
                <?php endif; ?>
                    <div class="cols col-3">
                        <div class="img-box">
                            <a class="img-link" data-title="<?=$photo->title;?>" data-img="<?=$photo->img;?>" style="cursor: zoom-in;" href="<?=$photo->img;?>" title="<?=$photo->title;?>"><img style="width: 100%;" src="<?=$photo->img;?>" alt="<?=$photo->description;?><?=$photo->id;?>"></a>
                        </div>
                    </div>
                <?php if($i % 4 == 0): ?>
                    </div>
                <?php endif; ?>
            <?php endforeach; ?>
        <?php endif; ?>
        <div class="text-center">
            <!-- <p>Показано от <?//=1;?> до <?//=count($posts);?> из <?//=$count;?> записей</p> -->
            <?php if($pagination->count_pages > 1): ?>
                <?=$pagination; ?>
            <?php endif; ?>
        </div>
    </div>
</div>
<style>
    .cols.col-4{
        display: none !important;
    }
    .img-box{
        text-align: center;
        height: 200px;
        overflow: hidden;
        margin-bottom: 10px;
    }
    .img-box img{
        height: 200px;
    }
</style>

