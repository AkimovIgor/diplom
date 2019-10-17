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
    <h1>Список пользователей</h1>
    <ol class="breadcrumb">
    <li><a href="<?=ADMIN;?>"><i class="fa fa-dashboard"></i> Главная</a></li>
    <li class="active">Список пользователей</li>
    </ol>
</section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-responsive table-bordered table-striped table-hover">
                <thead>
                <tr>
                  <th>ID</th>
                  <th>Логин</th>
                  <th>Email</th>
                  <th>Имя</th>
                  <th>Роль</th>
                  <th>Действия</th>
                </tr>
                </thead>
                <tbody>
                    <?php foreach($users as $user): ?>
                        <tr>
                        <td><?= $user['id']; ?></td>
                        <td><?= $user['login']; ?></td>
                        <td><?= $user['email']; ?></td>
                        <td><?= $user['name']; ?></td>
                        <td><?= $user['role']; ?></td>
                        <td>
                          <a class="text-success" title="Редактировать" href="<?=ADMIN;?>/user/edit?id=<?=$user['id'];?>"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                        </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
              </table>
            </div>
            <div class="text-center">
                <!-- <p>Показано от <?//=1;?> до <?//=count($posts);?> из <?//=$count;?> записей</p> -->
                <?php if($pagination->count_pages > 1): ?>
                    <?=$pagination; ?>
                <?php endif; ?>
            </div>
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->

