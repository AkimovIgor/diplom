<div class="login-box">
  <div class="login-logo">
    <b>Авторизация</b>
  </div>
  <!-- /.login-logo -->
  <div class="login-box-body">
    <p class="login-box-msg">Вход в админ панель</p>

    <style>
      .errors{
          border: 1px solid #ff8d8d;
          color: #e42222;
          background: #ffd1d1;
          padding: 10px;
          margin-bottom: 15px;
      }
      .success{
          border: 1px solid #82d690;
          color: #0fa228;
          background: #e5ffe9;
          padding: 10px;
          margin-bottom: 15px;
      }
    </style>

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

    <form action="<?=ADMIN;?>/user/login-admin" method="POST">
      <div class="form-group has-feedback">
        <input name="login" type="text" class="form-control" placeholder="Логин">
        <span class="glyphicon glyphicon-user form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input name="password" type="password" class="form-control" placeholder="Пароль">
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      <div class="row">
        <!-- <div class="col-xs-8">
          <div class="checkbox icheck">
            <label>
              <input type="checkbox"> Запомнить меня
            </label>
          </div>
        </div> -->
        <!-- /.col -->
        <div class="col-xs-12">
          <button type="submit" class="btn btn-primary btn-block btn-flat">Войти</button>
        </div>
        <!-- /.col -->
      </div>
    </form>

    <!-- <div class="social-auth-links text-center">
      <p>- OR -</p>
      <a href="#" class="btn btn-block btn-social btn-facebook btn-flat"><i class="fa fa-facebook"></i> Sign in using
        Facebook</a>
      <a href="#" class="btn btn-block btn-social btn-google btn-flat"><i class="fa fa-google-plus"></i> Sign in using
        Google+</a>
    </div> -->
    <!-- /.social-auth-links -->

    <!-- <a href="#">Забыли пароль?</a><br>
    <a href="register.html" class="text-center">Регистрация</a> -->

  </div>
  <!-- /.login-box-body -->
</div>
<!-- /.login-box -->

