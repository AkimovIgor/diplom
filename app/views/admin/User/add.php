<?php if(isset($_SESSION['error'])): ?>
    <div class="alert alert-danger alert-dismissible">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        <?php echo $_SESSION['error']; unset($_SESSION['error']);?>
    </div>
<?php endif;?>
<?php if(isset($_SESSION['success'])): ?>
    <div class="alert alert-success alert-dismissible">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        <?php echo $_SESSION['success']; unset($_SESSION['success']);?>
    </div>
<?php endif;?>
<section class="content-header">
    <h1>
        Добавление пользователя</b>
    </h1>
    <ol class="breadcrumb">
        <li><a href="<?=ADMIN;?>"><i class="fa fa-dashboard"></i> Главная</a></li>
        <li><a href="<?=ADMIN;?>/user">Пользователи</a></li>
        <li class="active">Добавление нового</li>
    </ol>
</section>
<section class="content">
<div class="row">
    <div class="col-xs-6">
        <div class="box">
        <div class="box-header">
            <h3 class="box-title">Добавление пользователей</h3>
        </div>
        <form role="form" action="/user/signup" method="POST" data-toggle="validator">
        <div class="box-body">
            <div class="form-group has-feedback">
                <label>Логин</label>
                <input id="login" name="login" class="form-control" value="<?= isset($_SESSION['form-data']['login']) ? $_SESSION['form-data']['login'] : '';?>" type="text" placeholder="Введите логин" required>
                <span class="glyphicon glyphicon-pencil form-control-feedback" aria-hidden="true"></span>
            </div>
            <div class="form-group has-feedback">
                <label>Пароль</label>
                <input id="password" name="password" class="form-control" value="" type="password" placeholder="Придумайте пароль">
                <span class="glyphicon glyphicon-lock form-control-feedback" aria-hidden="true"></span>
            </div>
            <div class="form-group has-feedback">
                <label>Повторите пароль</label>
                <input id="password2" name="password2" class="form-control" value="" type="password" placeholder="">
                <span class="glyphicon glyphicon-lock form-control-feedback" aria-hidden="true"></span>
            </div>
            <div class="form-group has-feedback">
                <label>Email</label>
                <input name="email" class="form-control" value="<?= isset($_SESSION['form-data']['email']) ? $_SESSION['form-data']['email'] : '';?>" type="text" placeholder="Введите адресс электронной почты"  required>
                <span class="glyphicon glyphicon-envelope form-control-feedback" aria-hidden="true"></span>
            </div>
            <div class="form-group has-feedback">
                <label>Имя</label>
                <input name="name" class="form-control" value="<?= isset($_SESSION['form-data']['name']) ? $_SESSION['form-data']['name'] : '';?>" type="text" placeholder="Введите имя пользователя">
                <span class="glyphicon glyphicon-user form-control-feedback" aria-hidden="true"></span>
            </div>
            <div class="form-group">
                <label>Роль</label>
                <div class="radio">
                    <label>
                        <input name="role" type="radio" id="optionsRadios1" value="user" checked>
                        Пользователь
                    </label>
                </div>
                <div class="radio">
                    <label>
                        <input name="role" type="radio" id="optionsRadios1" value="admin">
                        Администратор
                    </label>
                </div>
            </div>
            <div class="form-group">
                <input name="id" class="form-control" value="" type="hidden">
            </div>
        </div>
        <div class="box-footer">
        <button type="submit" name="change" class="btn btn-success">Добавить</button>
        </div>
        
    </form>
        <?php if(isset($_SESSION['form-data'])) unset($_SESSION['form-data']);?>
        <!-- /.box-body -->
        </div>
        <!-- /.box -->
    </div>
    <!-- /.col -->
    </div>
</section>
