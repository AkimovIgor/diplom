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
<!-- Content Header (Page header) -->
<section class="content-header">
    <h1>Панель управления</h1>
    <ol class="breadcrumb">
    <li><a href="<?=ADMIN;?>"><i class="fa fa-dashboard"></i> Главная</a></li>
    <li class="active">Панель управления</li>
    </ol>
</section>

    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
        <div class="col-lg-4 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">
              <h3><?= $count_new_posts; ?></h3>

              <p>Новые посты</p>
            </div>
            <div class="icon">
              <i class="ion ion-compose"></i>
            </div>
            <a href="<?=ADMIN; ?>/posts" class="small-box-footer">Подробнее <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-4 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-green">
            <div class="inner">
              <h3><?= $count_images; ?></h3>

              <p>Фотографии</p>
            </div>
            <div class="icon">
              <i class="ion ion-android-image"></i>
            </div>
            <a href="<?=ADMIN; ?>/gallery" class="small-box-footer">Подробнее <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-4 col-xs-6">
          <!-- small box -->
          <div class="small-box bg-yellow">
            <div class="inner">
              <h3><?= $count_users; ?></h3>

              <p>Пользователи</p>
            </div>
            <div class="icon">
              <i class="ion ion-ios-people"></i>
            </div>
            <a href="<?=ADMIN; ?>/user" class="small-box-footer">Подробнее <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-4 col-xs-6">
          <!-- small box -->
          <!-- <div class="small-box bg-red">
            <div class="inner">
              <h3>0</h3>

              <p>Комментарии</p>
            </div>
            <div class="icon">
              <i class="ion ion-android-chat"></i>
            </div>
            <a href="<?//=ADMIN; ?>/coments" class="small-box-footer">Подробнее <i class="fa fa-arrow-circle-right"></i></a>
          </div> -->
        </div>
        <!-- ./col -->
      </div>
      <!-- /.row -->

    </section>
    <!-- /.content -->