<div class="breadcrumbs">
    <ul class="clearfix">
        <li><a href="<?=PATH;?>">Главная</a></li>
        <li>Учителя</li>
    </ul>
</div>
<div class="cols col-12">
    <div class="post-box clearfix">
        <?php if(!empty($teachers)): ?>
            <?php $count = count($teachers); $i = 0; ?>
            <h1 class="text-center large-size-text mb-40 upper">Учителя</h1>
            <?php foreach($teachers as $teacher): ?>
                <?php $i++; $count--;?>
                <?php if($i % 2 == 0): ?>
                    <div class="article <?php if($count == 0) echo 'last-article';?> clearfix">
                <?php endif; ?>
                    <div class="cols col-3">
                        <i><p class="text_info medium-size-text lh-15"><?=$teacher->full_name;?></p></i>
                        <p class="text_info"><b>Должность: </b><?=$teacher->teach;?></p>
                        <p class="text_info"><b>Квалификационная категория:</b> <?=$teacher->category;?></p>
                        <?php if(!empty($teacher->title)): ?>
                            <p class="text_info"><b>Звание:</b> <?=$teacher->title;?></p>
                        <?php endif; ?>
                        <p class="text_info last"><b>Педагогический стаж на 01.09.2018:</b> <?=$teacher->experience;?></p>
                    </div>
                    <div class="cols col-3">
                        <img style="" src="<?=$teacher->img;?>" alt="<?=$teacher->img;?><?=$teacher->id;?>">
                    </div>
                <?php if($i % 2 == 0): ?>
                    </div>
                <?php endif; ?>
            <?php endforeach; ?>
        <?php endif; ?>
    </div>
</div>
<style>
    .cols.col-4{
        display: none !important;
    }
</style>