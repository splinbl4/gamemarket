<?php
include ROOT . '/views/layouts/head.php';
?>
<div class="main-wrapper">
    <?php
    include ROOT . '/views/layouts/header.php';
    ?>
    <div class="middle">
        <?php
        include ROOT . '/views/layouts/sidebar.php';
        ?>
        <div class="main-content">
            <div class="content-top">
                <div class="content-top__text">Купить игры неборого без регистрации смс с торента, получить компкт диск, скачать Steam игры после оплаты</div>
                <div class="slider"><img src="/template/img/slider.png" alt="Image" class="image-main"></div>
            </div>
            <div class="content-middle">
                <div class="content-head__container">
                    <div class="content-head__title-wrap">
                        <div class="content-head__title-wrap__title bcg-title">Новости</div>
                    </div>
                    <div class="content-head__search-block">
                        <div class="search-container">
                            <form class="search-container__form">
                                <input type="text" class="search-container__form__input">
                                <button class="search-container__form__btn">search</button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="content-main__container">
                    <div class="news-list__container">
                        <?php foreach ($latestNew as $newItem): ?>
                            <div class="news-list__item">
                                <div class="news-list__item__thumbnail"><img src="/template/img/news/<?php echo $newItem['image']; ?>"></div>
                                <div class="news-list__item__content">
                                    <div class="news-list__item__content__news-title"><?php echo $newItem['name']; ?></div>
                                    <div class="news-list__item__content__news-date"><?php echo $newItem['created_at']; ?></div>
                                    <div class="news-list__item__content__news-content">
                                        <?php echo htmlspecialchars_decode(substr($newItem['description'], 0, 404)) . '...'; ?>
                                    </div>
                                </div>
                                <div class="news-list__item__content__news-btn-wrap"><a href="/new/<?php echo $newItem['id']?>" class="btn btn-brown">Подробнее</a></div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
                <div class="content-footer__container">
                    <?php echo $pagination->get(); ?>
                </div>
            </div>
            <div class="content-bottom"></div>
        </div>
    </div>
    <?php
    include ROOT . '/views/layouts/footer.php'
    ?>
</div>
<script src="/template/js/main.js"></script>
</body>
</html>