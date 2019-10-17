<div class="breadcrumbs">
    <ul class="clearfix">
        <li><a href="<?=PATH;?>">Главная</a></li>
        <li>Добавить фотографии</li>
    </ul>
</div>
<div class="cols col-8">
    <div class="post-box clearfix">
        <h1 style="text-align: center; margin-bottom: 15px; font-size: 2em;">Добавить фото</h1>
        <?php if(isset($_SESSION['error'])): ?>
            <div class="alert alert-danger alert-dismissible errors">
                <?php echo $_SESSION['error']; unset($_SESSION['error']);?>
            </div>
        <?php endif;?>
        <?php if(isset($_SESSION['success'])): ?>
            <div class="alert alert-success alert-dismissible success">
                <?php echo $_SESSION['success']; unset($_SESSION['success']);?>
            </div>
        <?php endif;?>
        <form class="aside inp" action="user/addimg" method="POST" role="form" id="addpost">
            
            <label for="img">Картинка: </label>
            <p><input id="img" class="registr" type="file" name="img" required></p>
            <label for="">Заголовок: </label>
            <p><input id="title" class="registr" type="text" name="title" maxlength="30" autocomplete="off" placeholder="Введите название фотографии"></p>
            <label for="description">Описание: </label>
            <p><input type="text" class="registr" name="description" id="description"  placeholder="Введите описание к фотографии"></textarea></p>
            
            <input class="enter" type="submit" value="Добавить">
        </form>
    </div>
</div>