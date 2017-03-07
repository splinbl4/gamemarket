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
                <div class="image-container"><img src="/template/img/slider.png" alt="Image" class="image-main"></div>
            </div>
            <div class="content-middle">
                <div class="content-head__container">
                    <div class="content-head__title-wrap">
                        <div class="content-head__title-wrap__title bcg-title"><?php echo $productSingle['name']; ?> в разделе <?php echo $productSingle['category_name']; ?></div>
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
                    <div class="product-container">
                        <div class="product-container__image-wrap"><img src="/template/img/cover/<?php echo $productSingle['image']; ?>" class="image-wrap__image-product"></div>
                        <div class="product-container__content-text">
                            <div class="product-container__content-text__title"><?php echo $productSingle['name']; ?></div>
                            <div class="product-container__content-text__price">
                                <div class="product-container__content-text__price__value">
                                    Цена: <b><?php echo $productSingle['price']; ?></b>
                                    руб
                                </div><a href="#" class="btn btn-blue">Купить</a>
                            </div>
                            <div class="product-container__content-text__description">
                                <?php echo htmlspecialchars_decode($productSingle['description']); ?>
                            </div>
                        </div>
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
                                <div class="products-columns__item__title-product"><a href="<?php echo $productItem['id']; ?>" class="products-columns__item__title-product__link"><?php echo $productItem['name']; ?></a></div>
                                <div class="products-columns__item__thumbnail"><a href="<?php echo $productItem['id']; ?>" class="products-columns__item__thumbnail__link"><img src="/template/img/cover/<?php echo $productItem['image']; ?>" alt="Preview-image" class="products-columns__item__thumbnail__img"></a></div>
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
<script src="/template/js/main.js"></script>
</body>
</html>