<div class="breadcrumbs">
    <ul class="clearfix">
        <li><a href="<?=PATH;?>">Главная</a></li>
        <li>Администрация школы</li>
    </ul>
</div>
<div class="cols col-12">
    <div class="post-box clearfix">
        <?php if(!empty($adms)): ?>
            <?php $count = count($adms); ?>
            <?php foreach($adms as $adm): ?>
                <div class="article <?php $count--; if($count == 0) echo 'last-article';?> clearfix">
                    <div class="cols col-10">
                        <i><h1 class="text_info"><?=$adm->position;?></h1></i>
                        <h2 class="text_info"><?=$adm->full_name;?></h2>
                        <h3 class="text_info"><?=$adm->teach;?></h3>
                        <p class="text_info"><b>Образование:</b> <?=$adm->education;?><?php if(isset($adm->educ_place)) echo ': '.$adm->educ_place;?></p>
                        <p class="text_info"><b>Квалификационная категория:</b> <?=$adm->category;?></p>
                        <?php if(!empty($adm->title)): ?>
                            <p class="text_info"><b>Звание:</b> <?=$adm->title;?></p>
                        <?php endif; ?>
                        <p class="text_info last"><b>Педагогический стаж на 01.09.2018:</b> <?=$adm->experience;?></p>
                    </div>
                    <div class="cols col-2">
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