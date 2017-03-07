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
                        <div class="content-head__title-wrap__title bcg-title">Игры в разделе <?php echo $categoryName['name']; ?></div>
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
                    <div class="products-columns">
                        <?php foreach ($categoryProducts as $product): ?>
                            <div class="products-columns__item">
                                <div class="products-columns__item__title-product"><a href="/product/<?php echo $product['id']; ?>" class="products-columns__item__title-product__link"><?php echo $product['name']; ?></a></div>
                                <div class="products-columns__item__thumbnail"><a href="/product/<?php echo $product['id']; ?>" class="products-columns__item__thumbnail__link"><img src="/template/img/cover/<?php echo $product['image']; ?>" alt="Preview-image" class="products-columns__item__thumbnail__img"></a></div>
                                <div class="products-columns__item__description"><span class="products-price"><?php echo $product['price']; ?> руб.</span><a href="#" class="btn btn-blue">Купить</a></div>
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