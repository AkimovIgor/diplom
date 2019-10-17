<div class="breadcrumbs">
    <ul class="clearfix">
        <li><a href="<?=PATH;?>">Главная</a></li>
        <li><?=$post->title;?></li>
    </ul>
</div>
<div class="cols col-8">
    <div class="post-box clearfix">
        <div class="single_post" id="">
            <h1><?= $post->title;?></h1>
            <div id="date">Дата публикации: <?= $post->date;?></div>
            <div class="title_img">
                <img class="" src="<?= $post->img;?>">
            </div>
            <div id="text">
                <?= $post->content;?>
            </div>
            <div id="autor">Автор поста: <a href="/user/posts?id=<?= $post->autor;?>"><?= $user->name;?></a></div>
        </div>
    </div>
</div>
<style>
    p{
        margin-bottom: 20px;
    }
</style>
