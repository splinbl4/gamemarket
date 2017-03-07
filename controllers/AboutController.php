<?php


class AboutController
{
    public function actionIndex($productId)
    {
        $menus = Menu::getMenuList();

        $categories = Category::getCategoriesList();

        $latestProduct = Product::getLatestProducts(6);

        $latestNew = News::getLatestNews(1);

        $productRandom = Product::getProductRandom($productId);
        
        $userId = User::checkLogget();
        
        $user = User::getUserById($userId);

        require_once (ROOT . '/views/site/about.php');
        return true;
    }
}