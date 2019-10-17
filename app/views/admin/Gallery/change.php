<section class="content-header">
    <h1>
        Редактирование картинки № <b><?= $img['id']; ?></b>
    </h1>
    <ol class="breadcrumb">
        <li><a href="<?=ADMIN;?>"><i class="fa fa-dashboard"></i> Главная</a></li>
        <li><a href="<?=ADMIN;?>/gallery">Галерея</a></li>
        <li class="active"><?= $img['title']; ?></li>
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
                <input name="img" type="file" id="exampleInputFile" value="<?= $img['img'];?>" required="required">
                <p class="help-block">Редактируемый файл: <?= str_replace('/images/gallery/', '', $img['img']);?></p>
                <div><img style="width: 150px;" src="<?= $img['img'];?>" alt=""></div>
            </div>
            <div class="form-group">
                <label>Заголовок</label>
                <input name="title" class="form-control" value="<?=$img['title'];?>" type="text" placeholder="Введите название статьи" required>
            </div>
            <div class="form-group">
                <label>Статус</label>
                <div class="radio">
                    <label>
                        <input name="status" type="radio" id="optionsRadios1" value="1" <?=$img['status'] ? 'checked' : '';?>>
                        Активная
                    </label>
                </div>
                <div class="radio">
                    <label>
                        <input name="status" type="radio" id="optionsRadios1" value="0" <?=$img['status'] ? '' : 'checked';?>>
                        Неактивная
                    </label>
                </div>
            </div>
            <div class="form-group">
                <label>Описание</label>
                <input name="description" class="form-control" value="<?=$img['description'];?>" type="text" placeholder="">
            </div>
        </div>
        <div class="box-footer">
         <button type="submit" name="change" class="btn btn-primary">Изменить</button>
        </div>
    </form>
        <!-- /.box-body -->
        </div>
        
        <!-- /.box -->
    </div>
    <!-- /.col -->
    </div>
</section>
