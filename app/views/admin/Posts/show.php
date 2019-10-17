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
        Просмотр статьи с № <b><?= $post['id']; ?></b> :
        <?php if(!$post['status']): ?>
            <a href="<?= ADMIN; ?>/posts/edit?id=<?= $post['id']; ?>&status=1" class="btn btn-success btn-xs">Опубликовать</a>
            <?php else: ?>
            <a href="<?= ADMIN; ?>/posts/change?id=<?= $post['id']; ?>" class="btn btn-info btn-xs">Изменить</a>
            
        <?php endif; ?>
        <a href="<?= ADMIN; ?>/posts/delete?id=<?= $post['id']; ?>" class="btn btn-danger btn-xs delete">Удалить</a>
    </h1>
    <ol class="breadcrumb">
        <li><a href="<?=ADMIN;?>"><i class="fa fa-dashboard"></i> Главная</a></li>
        <li><a href="<?=ADMIN;?>/posts">Статьи</a></li>
        <li class="active"><?= $post['title']; ?></li>
    </ol>
</section>
<section class="content">
<div class="row">
    <div class="col-xs-12">
        <div class="box">
        <!-- /.box-header -->
        <div class="box-body">
            <table id="example2" class="table table-responsive table-bordered table-striped table-hover">
            <thead>
            <tr>
                <th>Заголовок</th>
                <th>Картинка</th>
                <th>Дата добавления</th>
                <th>Автор</th>
                <th>Контент</th>
            </tr>
            </thead>
                <tbody>
                    <td><?= $post['title']; ?></td>
                    <td><img width="100" src="<?= $post['img']; ?>" alt="<?= $post['title']; ?>"></td>
                    <td><?= $post['date']; ?></td>
                    <td><?= $users[$post['autor']]->name; ?></td>
                    <td><?= hsc($post['content']); ?></td>
                </tbody>
            </table>
        </div>
        </div>
        <!-- /.box -->
    </div>
    <!-- /.col -->
    </div>
</section>