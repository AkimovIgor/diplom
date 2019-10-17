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
    <h1>Список постов</h1>
    <ol class="breadcrumb">
    <li><a href="<?=ADMIN;?>"><i class="fa fa-dashboard"></i> Главная</a></li>
    <li class="active">Список постов</li>
    </ol>
</section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box" style="overflow-x: auto;">
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-responsive table-bordered table-striped table-hover">
                <thead>
                <tr>
                  <th>ID</th>
                  <th>Заголовок</th>
                  <th>Категория</th>
                  <th>Статус</th>
                  <th>Автор</th>
                  <th>Дата создания</th>
                  <th>Действия</th>
                </tr>
                </thead>
                <tbody>
                    <?php foreach($posts as $post): ?>
                        <tr>
                        <td><?= $post['id']; ?></td>
                        <td><?= $post['title']; ?></td>
                        <td><?= $categories[$post['category_id']]->name; ?></td>
                        <td><?= $post['status'] ? 'Активная' : 'Неактивная'; ?></td>
                        <td><?= $users[$post['autor']]->name; ?></td>
                        <td><?= $post['date']; ?></td>
                        <td>
                          <?php if(!$post['status']): ?>
                          <a class="text-success"title="Опубликовать" href="<?=ADMIN;?>/posts/edit?id=<?=$post['id'];?>&status=1"><i class="fa fa-check-circle-o" aria-hidden="true"></i></a>
                          <?php endif; ?>
                          <?php if($post['status']): ?>
                          <a class="text-warning"title="Скрыть" href="<?=ADMIN;?>/posts/edit?id=<?=$post['id'];?>&status="><i class="fa fa-minus-circle" aria-hidden="true"></i></a>
                          <?php endif; ?>
                          <a class="text-info"title="Посмотреть" href="<?=ADMIN;?>/posts/show?id=<?=$post['id'];?>"><i class="fa fa-eye" aria-hidden="true"></i></a>
                          <a class="text-danger delete" title="Удалить" href="<?=ADMIN;?>/posts/delete?id=<?=$post['id'];?>"><i class="fa fa-close" aria-hidden="true"></i></a>
                          <a class="text-success" title="Редактировать" href="<?=ADMIN;?>/posts/change?id=<?=$post['id'];?>"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
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

