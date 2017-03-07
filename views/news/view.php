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
                    <div class="news-block content-text">
                        <h3 class="content-text__title">
                            <?php echo $newSingle['name']; ?>
                        </h3><img src="/template/img/news/<?php echo $newSingle['image']; ?>" alt="Image" class="alignleft img-news">
                        <?php echo htmlspecialchars_decode($newSingle['description']); ?>
                    </div>
                </div>
            </div>
            <div class="content-bottom">
                <div class="line"></div>
                <div class="content-head__container">
                    <div class="content-head__title-wrap">
                        <div class="content-head__title-wrap__title bcg-title">Посмотрите наши товары</div>
                    </div>
                </div>
                <div class="content-main__container">
                    <div class="products-columns">
                        <?php foreach ($latestProduct as $productItem): ?>
                            <div class="products-columns__item">
                                <div class="products-columns__item__title-product"><a href="/product/<?php echo $productItem['id']; ?>" class="products-columns__item__title-product__link"><?php echo $productItem['name']; ?></a></div>
                                <div class="products-columns__item__thumbnail"><a href="/product/<?php echo $productItem['id']; ?>" class="products-columns__item__thumbnail__link"><img src="/template/img/cover/<?php echo $productItem['image']; ?>" alt="Preview-image" class="products-columns__item__thumbnail__img"></a></div>
                                <div class="products-columns__item__description"><span class="products-price"><?php echo $productItem['price']; ?> руб</span><a href="#" class="btn btn-blue">Купить</a></div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php
    include ROOT . '/views/layouts/footer.php'
    ?>
</div>
<script src="js/main.js"></script>
</body>
</html>