<div class="breadcrumbs">
    <ul class="clearfix">
        <li><a href="<?=PATH;?>">Главная</a></li>
        <li class="active">Администрация школы</li>
    </ul>
</div>
<div class="cols col-12">
    <div class="post-box clearfix">
        <?php if(!empty($adms)): ?>
            <?php $count = count($adms); ?>
            <h1 class="text-center large-size-text mb-40 upper">Администрация школы</h1>
            <?php foreach($adms as $adm): ?>
                <div class="article <?php $count--; if($count == 0) echo 'last-article';?> clearfix">
                    <div class="cols col-9">
                        <h1 class="text_info large-size-text"><?=$adm->position;?></h1>
                        <i><p class="text_info medium-size-text"><?=$adm->full_name;?></p></i>
                        <h3 class="text_info"><?=$adm->teach;?></h3>
                        <p class="text_info"><b>Образование:</b> <?=$adm->education;?><?php if(isset($adm->educ_place)) echo ': '.$adm->educ_place;?></p>
                        <p class="text_info"><b>Квалификационная категория:</b> <?=$adm->category;?></p>
                        <?php if(!empty($adm->title)): ?>
                            <p class="text_info"><b>Звание:</b> <?=$adm->title;?></p>
                        <?php endif; ?>
                        <p class="text_info last"><b>Педагогический стаж на 01.09.2018:</b> <?=$adm->experience;?></p>
                    </div>
                    <div class="cols col-3">
                        <img src="<?=$adm->img;?>" alt="<?=$adm->img;?><?=$adm->id;?>">
                    </div>
                </div>
            <?php endforeach; ?>
        <?php endif; ?>
    </div>
</div>
<style>
    .cols.col-4{
        display: none !important;
    }
</style>