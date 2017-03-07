<div class="sidebar">
    <div class="sidebar-item">
        <div class="sidebar-item__title">Категории</div>
        <div class="sidebar-item__content">
            <ul class="sidebar-category">
                <?php foreach ($categories as $category): ?>
                    <li class="sidebar-category__item"><a href="/category/<?php echo $category['id'];?>" class="sidebar-category__item__link<?php if (isset($categoryId) && $categoryId == $category['id']) echo '--active'; ?>"><?php echo $category['name'];?></a></li>
                <?php endforeach ?>
            </ul>
        </div>
    </div>
    <div class="sidebar-item">
        <div class="sidebar-item__title">Последние новости</div>
        <div class="sidebar-item__content">
            <div class="sidebar-news">
                <div class="sidebar-news__item">
                    <?php foreach ($latestNew as $newItem): ?>
                        <div class="sidebar-news__item__preview-news"><img src="/template/img/news/<?php echo $newItem['image']?>" alt="image-new" class="sidebar-new__item__preview-new__image"></div>
                        <div class="sidebar-news__item__title-news"><a href="/new/<?php echo $newItem['id']?>" class="sidebar-news__item__title-news__link"><?php echo $newItem['name']?></a></div>
                    <?php endforeach ?>
                </div>
            </div>
        </div>
    </div>
</div>