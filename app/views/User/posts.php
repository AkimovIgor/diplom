<div class="breadcrumbs">
    <ul class="clearfix">
        <li><a href="<?=PATH;?>">Главная</a></li>
        <li><?= $users[$user]->name; ?></li>
    </ul>
</div>
<div class="cols col-8">
    <div class="post-box clearfix">
        <?php $count = count($posts); ?>
        <?php if($count == 0): ?>
        <h1 style="text-align: center; margin-bottom: 15px; font-size: 2em;">Постов этого автора не найдено</h1>
        <?php else: ?>
        <?php foreach($posts as $post): ?>
            <div class="article <?php $count--; if($count == 0) echo 'last-article';?> clearfix">
                <div class="post-img post-content">
                    <a href="post/<?= $post->alias; ?>"><img class="left" src="<?= $post->img; ?>" alt="<?= $post->id; ?>"></a>
                </div>
                <div class="post-text post-content">
                    <h3 class="post-title"><?= $post->title; ?></h3>
                    <div class="post-line"></div>
                    <div class="post-meta">
                        <span class="post-author">Автор: <a href="/user/posts?id=<?= $post->autor; ?>"><?= $users[$post->autor]->name; ?></a></span>
                        <span class="post-date"><?= $post->date; ?></span>
                    </div>
                    <div class="post-line"></div>
                    <p id=""><?=$this->stripPost($post->content);?></p>
                    <div class="read-more"><span><a href="post/<?= $post->alias; ?>">Читать далее</a></span></div>
                </div>
            </div>
        <?php endforeach; ?>
        <div class="text-center">
            <!-- <p>Показано от <?//=1;?> до <?//=count($posts);?> из <?//=$count;?> записей</p> -->
            <?php if($pagination->count_pages > 1): ?>
                <?=$pagination; ?>
            <?php endif; ?>
        </div>
        <?php endif; ?>
    </div>
</div>





