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
        Добавление нового фото
    </h1>
    <ol class="breadcrumb">
        <li><a href="<?=ADMIN;?>"><i class="fa fa-dashboard"></i> Главная</a></li>
        <li><a href="<?=ADMIN;?>/posts">Галерея</a></li>
        <li class="active">Добавить картинку</li>
    </ol>
</section>
<section class="content">
<div class="row">
    <div class="col-md-6">
        <div class="box">
        <div class="box-header">
            <h3 class="box-title">Редактор</h3>
        </div>
        <form role="form" action="" method="POST">
        <div class="box-body pad">
            <div class="form-group">
                <label>Картинка</label>
                <input name="img" type="file" id="exampleInputFile" value="" required="required">
            </div>
            <div class="form-group">
                <label>Заголовок</label>
                <input name="title" class="form-control" value="" type="text" placeholder="Введите название картинки" required>
            </div>
            <div class="form-group">
                <label>Описание</label>
                <input name="description" class="form-control" value="" type="text" placeholder="Введите описание картинки" required>
            </div>
            <div class="form-group">
                <label>Статус</label>
                <div class="radio">
                    <label>
                        <input name="status" type="radio" id="optionsRadios1" value="1">
                        Активная
                    </label>
                </div>
                <div class="radio">
                    <label>
                        <input name="status" type="radio" id="optionsRadios1" value="0" checked>
                        Неактивная
                    </label>
                </div>
            </div>
        </div>
        <div class="box-footer">
         <button type="submit" name="change" class="btn btn-success">Добавить</button>
        </div>
    </form>
        <!-- /.box-body -->
        </div>
        
        <!-- /.box -->
    </div>
    <!-- /.col -->
    </div>
</section>
