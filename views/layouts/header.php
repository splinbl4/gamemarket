<header class="main-header">
    <div class="logotype-container"><a href="/" class="logotype-link"><img src="/template/img/logo.png" alt="Логотип"></a></div>
    <nav class="main-navigation">
        <ul id="nav-list">
            <?php foreach ($menus as $menu): ?>
            <li class="nav-list__item"><a href="<?php echo $menu['path']; ?>" class="nav-list__item__link <?php $url = $menu['path']; if (isset($_SERVER['REQUEST_URI']) && ($_SERVER['REQUEST_URI'] == $url)) echo 'active'; ?>"><?php echo $menu['title']; ?></a></li>
            <? endforeach; ?>    
        </ul>
        
    </nav>
    <div class="header-contact">
        <div class="header-contact__phone"><a href="#" class="header-contact__phone-link">Телефон: 33-333-33</a></div>
    </div>
    <div class="header-container">
        <div class="payment-container">
            <div class="payment-basket__status">
                <div class="payment-basket__status__icon-block"><a class="payment-basket__status__icon-block__link"><i class="fa fa-shopping-basket"></i></a></div>
                <div class="payment-basket__status__basket"><span class="payment-basket__status__basket-value">0</span><span class="payment-basket__status__basket-value-descr">товаров</span></div>
            </div>
        </div>
        <div class="authorization-block">
            <?php if (User::isGuest()): ?>
            <a href="/user/register/" class="authorization-block__link">Регистрация</a>
            <a href="/user/login/" class="authorization-block__link">Войти</a>
            <?php else: ?>
            <span class="authorization-block__link"><?php echo $user['name']; ?></span>
            <a href="/user/logout/" class="authorization-block__link">Выйти</a>
            <?php endif; ?>
        </div>
    </div>
</header>
