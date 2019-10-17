<?php 
    $parent = isset($category['childs']);
?>
<li>
<a class="<?=$this->active($category['alias']);?><?php if($category['alias'] == 'menu/#' || $category['alias'] == '#') echo ' accordion';?>" <?php if($category['alias'] == 'menu/#' || $category['alias'] == '#'):?> <?php else:?>href="<?php if(empty($category['alias'])) echo ''; else echo 'menu/'.$category['alias']; ?>"; <?php endif; ?>><?php if(isset($category['ico'])): ?><i class="<?=$category['ico'];?>"></i><?php endif; ?> <?= $category['title']; ?></a>
    <?php if(isset($category['childs'])): ?>
        <ul class="drop">
            <?= $this->getMenuHtml($category['childs']); ?>
        </ul>
    <?php endif; ?>
</li>