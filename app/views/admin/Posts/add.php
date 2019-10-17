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
        Добавление новой статьи
    </h1>
    <ol class="breadcrumb">
        <li><a href="<?=ADMIN;?>"><i class="fa fa-dashboard"></i> Главная</a></li>
        <li><a href="<?=ADMIN;?>/posts">Статьи</a></li>
        <li class="active">Добавить новую</li>
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
                <label>Заголовок</label>
                <input name="title" class="form-control" value="<?=$post['title'];?>" type="text" placeholder="Введите название статьи" required>
            </div>
            <div class="form-group">
                <label>Категория</label>
                <select name="category" class="form-control">
                    <?php foreach($categories as $cat):?>
                        <?php if($categories[$post['category_id']]->id == $categories[$cat['id']]->id):?>
                            <option selected value="<?=$categories[$post['category_id']]->id;?>"><?=$categories[$post['category_id']]->name;?></option>
                            <?php else:?>
                            <option value="<?=$categories[$cat['id']]->id;?>"><?=$categories[$cat['id']]->name;?></option>
                        <?php endif;?>
                    <?php endforeach;?>
                </select>
            </div>
            <div class="form-group">
                <label>Алиас</label>
                <input name="alias" class="form-control" value="" type="text" placeholder="Введите алиас, например: news"  required>
            </div>
            <div class="form-group">
                <label>Картинка</label>
                <input name="img" type="file" id="exampleInputFile" value="" required="required">
            </div>
            <div class="form-group">
                <label>Дата</label>
                <div class="input-group">
                  <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                  </div>
                  <input name="date" value="<?=date('Y-m-d');?>" type="date" class="form-control" required>
                </div>
            </div>
            <div class="form-group">
                <label>Время</label>
                <div class="input-group">
                  <div class="input-group-addon">
                    <i class="fa fa-clock-o"></i>
                  </div>
                  <input name="time" value="<?=date('H:i');?>" type="time" class="form-control" required>
                </div>
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
            <div class="form-group">
                <label>Ключевые слова</label>
                <input name="keywords" class="form-control" value="" type="text" placeholder="">
            </div>
            <div class="form-group">
                <label>Описание</label>
                <input name="description" class="form-control" value="" type="text" placeholder="">
            </div>
            <div class="form-group">
                <label>Контент</label>
                <textarea id="editor1" name="content" class="textarea" placeholder="Начните писать статью"><?=$post['content'];?></textarea>
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
