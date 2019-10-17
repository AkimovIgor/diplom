<div class="breadcrumbs">
    <ul class="clearfix">
        <li><a href="<?=PATH;?>">Главная</a></li>
        <li>Администрация школы</li>
    </ul>
</div>
<div class="cols col-12">
    <div class="post-box clearfix">
        <?php if(!empty($adms)): ?>
            <?php foreach($adms as $adm): ?>
                <?php $count = count($adms); ?>
                <div class="article <?php $count--; if($count == 0) echo 'last-article';?> clearfix">
                    <h1><?=$adm->position;?></h1>
                    <h2><?=$adm->full_name;?></h2>
                    <h3><?=$adm->teach;?></h3>
                    <p><?=$adm->education;?><?php if(isset($adm->educ_place)) echo ': '.$adm->educ_place;?></p>
                    <p><?=$adm->category;?></p>
                    <?php if(isset($adm->title)): ?>
                        <p><?=$adm->title;?></p>
                    <?php endif; ?>
                    <p><?=$adm->experience;?></p>
                    <img src="<?=$adm->img;?>" alt="<?=$adm->img;?><?=$adm->id;?>">
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