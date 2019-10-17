<div class="cols col-8">
    <div class="post-box clearfix">
        <div class="slider-box">
            <div class="slider">
                <div class="slider-line clearfix">
                    <div class="slider_item"><img src="images/4.jpg" alt="1"></div>
                    <div class="slider_item"><img src="images/2.jpg" alt="2"></div>
                    <div class="slider_item"><img src="images/3.jpg" alt="3"></div>
                    <div class="slider_item"><img src="images/1.jpg" alt="4"></div>
                    <div class="slider_item"><img src="images/5.jpg" alt="5"></div>
                </div>
                <span class="prev" href="#">&#10094;</span>
                <span class="start">
                    <span class="play">
                        <span></span>
                    </span>
                    <span class="pause show">
                        <span></span>
                        <span></span>
                    </span>
                </span>
                <span class="next" href="#">&#10095;</span>
                <a class="info" href="#">Школьная линейка</a>
            </div>
            <div class="slider-dots">
                <span class="slider-dots_item active-slide"></span> 
                <span class="slider-dots_item"></span> 
                <span class="slider-dots_item"></span>
                <span class="slider-dots_item"></span>
                <span class="slider-dots_item"></span>
            </div>
        </div>
        <!-- <p>
            <h1 style="margin: 1em 0;" class="text-center">ДОБРО ПОЖАЛОВАТЬ</h1>
            <p style="font-size: 0.9em;" class="text-center">
                на официальный сайт муниципального общеобразовательного учреждения 
                "Школа №145 города Донецка"
            </p>
        </p> -->
        <div class="last-news">Последние записи</div>
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
        <script src="js/slider.js"></script>
    </div>
</div>
