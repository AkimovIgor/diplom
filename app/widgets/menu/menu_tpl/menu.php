<li>
    <a href="?id<?= $id; ?>"><?= $category['title']; ?></a>
    <?php if(isset($category['childs'])): ?>
        <ul class="dropdown">
            <?= $this->getMenuHtml($category['childs']); ?>
        </ul>
    <?php endif; ?>
</li>