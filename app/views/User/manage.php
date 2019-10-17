<div class="breadcrumbs">
    <ul class="clearfix">
        <li><a href="<?=PATH;?>">Главная</a></li>
        <li><?=$_SESSION['user']['name'];?></li>
    </ul>
</div>
<div class="cols col-8">
    <div class="post-box clearfix">
        <h1 class="text-center">Добро пожаловать <span style="color: #f00;"><?=$_SESSION['user']['name'];?></span></h1>
        <ul>
            <li><a href="user/posts?id=<?=$_SESSION['user']['id'];?>">Мои статьи</a></li>
            <li><a href="user/add">Добавить статью</a></li>
            <li><a href="user/addimg">Добавить фотографию</a></li>
            <!-- <li><a href="user/change">Изменить пароль</a></li>
            <li><a href="user/deleteacc">Удалить аккаунт</a></li> -->
            <li><a href="user/logout">Выход</a></li>
        </ul>
    </div>
</div>