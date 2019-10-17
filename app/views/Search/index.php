<div class="breadcrumbs">
    <ul class="clearfix">
        <li><a href="<?=PATH;?>">Главная</a></li>
        <li>Поиск по запросу "<?=hsc($query);?>"</li>
    </ul>
</div>
<div class="cols col-8">
    <div class="post-box clearfix">
        <?php if(!empty($posts)): ?>
            <?php $count = count($posts); ?>
            <?php foreach($posts as $post): ?>
                <div class="article <?php $count--; if($count == 0) echo 'last-article';?> clearfix">
                    <div class="post-img post-content">
                        <a href="post/<?= $post->alias; ?>"><img class="left" src="<?= $post->img; ?>" alt="<?= $post->id; ?>"></a>
                    </div>
                    <div class="post-text post-content">
                        <h3 class="post-title"><?= $post->title; ?></h3>
                        <div class="post-line"></div>
                        <div class="post-meta">
                            <span class="post-author">Автор: <a href="#"><?= $users[$post->autor]->name; ?></a></span>
                            <span class="post-date"><?= $post->date; ?></span>
                        </div>
                        <div class="post-line"></div>
                        <p id=""><?=$this->stripPost($post->content);?></p>
                        <div class="read-more"><span><a href="post/<?= $post->alias; ?>">Читать далее</a></span></div>
                    </div>
                </div>
            <?php endforeach; ?>
        <?php else:?>
            <h1>Поиск не дал результатов.</h1>
        <?php endif; ?>
        <div class="text-center">
            <!-- <p>Показано от <?//=1;?> до <?//=count($posts);?> из <?//=$count;?> записей</p> -->
            <?php if(isset($pagination) && $pagination->count_pages > 1): ?>
                <?=$pagination; ?>
            <?php endif; ?>
        </div>
    </div>
</div>
