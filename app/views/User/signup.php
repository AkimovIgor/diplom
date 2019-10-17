<div class="breadcrumbs">
    <ul class="clearfix">
        <li><a href="<?=PATH;?>">Главная</a></li>
        <li>Регистрация</li>
    </ul>
</div>
<div class="cols col-8">
    <div class="post-box clearfix">
        <h1 style="text-align: center; margin-bottom: 15px; font-size: 2em;">Регистрация</h1>
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
        <form class="aside inp" action="user/signup" method="POST" role="form" id="signup">
            <!-- <div class="form-group has-feedback">
                <label for="login" class="control-label">Логин(Login)</label>
                <input type="text" class="form-control" id="login" placeholder="Придумайте себе логин" required data-error="Bruh, that email address is invalid">
                <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                <div class="help-block with-errors">Hey look, this one has feedback icons!</div>
            </div>
            <div class="form-group has-feedback">
                <label for="password" class="control-label">Пароль(Password)</label>
                <input type="password" class="form-control" id="password" placeholder="Придумайте надежный пароль" required data-error="Bruh, that email address is invalid">
                <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                <div class="help-block with-errors">Hey look, this one has feedback icons!</div>
            </div>
            <div class="form-group has-feedback">
                <label for="name" class="control-label">Имя(Name)</label>
                <input type="text" class="form-control" id="name" placeholder="введите Ваше имя, например: Алексей" required data-error="Bruh, that email address is invalid">
                <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                <div class="help-block with-errors">Hey look, this one has feedback icons!</div>
            </div>
            <div class="form-group has-feedback">
                <label for="email" class="control-label">Email</label>
                <input type="text" class="form-control" id="email" placeholder="введите Ваш адрес электронной почты" required data-error="Bruh, that email address is invalid">
                <span class="glyphicon form-control-feedback" aria-hidden="true"></span>
                <div class="help-block with-errors">Hey look, this one has feedback icons!</div>
            </div> -->
            <label for="login">Логин: </label>
            <p><input id="login" class="registr" type="text" name="login" maxlength="30" autocomplete="off" required value="<?= isset($_SESSION['form-data']['login']) ? $_SESSION['form-data']['login'] : '';?>"></p>
            <label for="password">Пароль: </label>
            <p><input id="password" class="registr" type="password" name="password" maxlength="60" autocomplete="off" aria-autocomplete="off" required value="<?= isset($_SESSION['form-data']['password']) ? $_SESSION['form-data']['password'] : '';?>"></p>
            <label for="password2">Повторите пароль: </label>
            <p><input id="password2" class="registr" type="password" name="password2" maxlength="60" autocomplete="off" aria-autocomplete="off" required></p>
            <label for="name">Имя: </label>
            <p><input id="name" class="registr" type="text" name="name" maxlength="60" autocomplete="off" required value="<?= isset($_SESSION['form-data']['name']) ? $_SESSION['form-data']['name'] : '';?>"></p>
            <label for="email">Email: </label>
            <p><input id="email" class="registr" type="email" name="email" maxlength="100" autocomplete="off" required value="<?= isset($_SESSION['form-data']['email']) ? $_SESSION['form-data']['email'] : '';?>"></p>
            <input class="enter" type="submit" value="Зарегистрироваться">
        </form>
    </div>
</div>