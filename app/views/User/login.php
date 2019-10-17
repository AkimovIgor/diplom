<div class="breadcrumbs">
    <ul class="clearfix">
        <li><a href="<?=PATH;?>">Главная</a></li>
        <li>Авторизация</li>
    </ul>
</div>
<div class="cols col-8">
    <div class="post-box clearfix">
        <h1 style="text-align: center; margin-bottom: 15px; font-size: 2em;">Вход в учетную запись</h1>
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
        <form class="aside inp" action="user/login" method="POST" role="form" id="signup">
            <label for="login">Логин: </label>
            <p><input id="login" class="registr" type="text" name="login" maxlength="30" autocomplete="off" required value="<?= isset($_SESSION['form-data']['login']) ? $_SESSION['form-data']['login'] : '';?>"></p>
            <label for="password">Пароль: </label>
            <p><input id="password" class="registr" type="password" name="password" maxlength="60" autocomplete="off" aria-autocomplete="off" required></p>
            <input class="enter" type="submit" value="Войти">
        </form>
    </div>
</div>