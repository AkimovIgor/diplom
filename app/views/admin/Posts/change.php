<section class="content-header">
    <h1>
        Редактирование статьи с № <b><?= $post['id']; ?></b>
    </h1>
    <ol class="breadcrumb">
        <li><a href="<?=ADMIN;?>"><i class="fa fa-dashboard"></i> Главная</a></li>
        <li><a href="<?=ADMIN;?>/posts">Статьи</a></li>
        <li class="active"><?= $post['title']; ?></li>
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
                <input name="alias" class="form-control" value="<?=$post['alias'];?>" type="text" placeholder="Введите алиас, например: news"  required>
            </div>
            <div class="form-group">
                <label>Картинка</label>
                <input name="img" type="file" id="exampleInputFile" value="<?= $post['img'];?>" required="required">
                <p class="help-block">Текущий файл: <?= str_replace('/images/', '', $post['img']);?></p>
                <div><img style="width: 150px;" src="<?= $post['img'];?>" alt=""></div>
            </div>
            <div class="form-group">
                <label>Дата</label>
                <div class="input-group">
                  <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                  </div>
                  <input name="date" value="<?=date('Y-m-d', strtotime($post['date']));?>" type="date" class="form-control" required>
                </div>
            </div>
            <div class="form-group">
                <label>Время</label>
                <div class="input-group">
                  <div class="input-group-addon">
                    <i class="fa fa-clock-o"></i>
                  </div>
                  <input name="time" value="<?=date('H:i', strtotime($post['date']));?>" type="time" class="form-control" required>
                </div>
            </div>
            <div class="form-group">
                <label>Статус</label>
                <div class="radio">
                    <label>
                        <input name="status" type="radio" id="optionsRadios1" value="1" <?=$post['status'] ? 'checked' : '';?>>
                        Активная
                    </label>
                </div>
                <div class="radio">
                    <label>
                        <input name="status" type="radio" id="optionsRadios1" value="0" <?=$post['status'] ? '' : 'checked';?>>
                        Неактивная
                    </label>
                </div>
            </div>
            <div class="form-group">
                <label>Ключевые слова</label>
                <input name="keywords" class="form-control" value="<?=$post['keywords'];?>" type="text" placeholder="">
            </div>
            <div class="form-group">
                <label>Описание</label>
                <input name="description" class="form-control" value="<?=$post['description'];?>" type="text" placeholder="">
            </div>
            <div class="form-group">
                <label>Контент</label>
                <textarea id="editor1" name="content" class="textarea" placeholder="Начните писать статью"><?=$post['content'];?></textarea>
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
