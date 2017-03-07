<?php


class UserController
{
    public function actionRegister($productId)
    {
        $menus = Menu::getMenuList();

        $categories = Category::getCategoriesList();

        $latestNew = News::getLatestNews(3);

        $productRandom = Product::getProductRandom($productId);

        $name = '';
        $email = '';
        $password = '';
        $result = false;

        if (isset($_POST['submit'])) {
            $name = $_POST['name'];
            $email = $_POST['email'];
            $password = $_POST['password'];
            
            $errors = false;
            
            if(!User::checkName($name)) {
                $errors[] = 'Имя не должно быть короче 2-х символов';
            }
            
            if(!User::checkPassword($password)){
                $errors[] = 'Пароль не должен быть короче 6-и символов';
            }
            
            if(!User::checkEmail($email)){
                $errors[] = 'Неправильный email';
            }
            
            if(User::checkEmailExist($email)) {
                $errors[] = 'Такой email уже существует';
            }
            
            if($errors == false) {
                $result = User::register($name, $email, $password);
            }
        }

        require_once (ROOT . '/views/user/register.php');

        return true;

    }
    
    public function actionLogin($productId)
    {
        $menus = Menu::getMenuList();

        $categories = Category::getCategoriesList();

        $latestNew = News::getLatestNews(3);

        $productRandom = Product::getProductRandom($productId);

        $email = '';
        $password = '';

        if (isset($_POST['submit'])) {
            $email = $_POST['email'];
            $password = $_POST['password'];
            
            $errors = false;
            
            if(!User::checkPassword($password)){
                $errors[] = 'Пароль не должен быть короче 6-и символов';
            }
            
            if(!User::checkEmail($email)){
                $errors[] = 'Неправильный email';
            }
            
            $userId = User::checkUserData($email, $password);
            
            if ($userId == false) {
                $errors[] = 'Неверный пароль или email';
            } else {
                User::auth($userId);
                
                header('Location: /');
            }
        }

        require_once (ROOT . '/views/user/login.php');

        return true;

    }
    
    public function actionLogout()
    {
        unset($_SESSION['user']);
        header('Location: /');
    }
}