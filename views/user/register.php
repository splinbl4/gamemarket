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
            <?php if($result): ?>
                <p>Вы зарегестрированы!</p>
            <?php else: ?>
                <?php if(isset($errors) && is_array($errors)): ?>
                    <ul>
                        <?php foreach ($errors as $error): ?>
                            <li><?php echo $error; ?></li>
                        <?php endforeach; ?>
                    </ul>
                <?php endif; ?>
                <div class="content-top__text">Регистрация</div>
                <form action="#"  method="post">
                    <input type="text" name="name" class="register-container__form__input" placeholder="Имя" value="<?php echo $name; ?>"><br><br>
                    <input type="email" name="email" class="register-container__form__input" placeholder="E-mail" value="<?php echo $email; ?>"><br><br>
                    <input type="password" name="password" class="register-container__form__input" placeholder="Пароль" value="<?php echo $password; ?>"><br><br>
                    <input type="submit" name="submit" class="register-container__form__btn" value="Регистрация">
                </form>
            <?php endif; ?>
        </div>
    </div>
    <?php
    include ROOT . '/views/layouts/footer.php'
    ?>
</div>
<script src="/template/js/main.js"></script>
</body>
</html>