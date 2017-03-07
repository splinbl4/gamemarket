<?php


class ProductController
{
    public function actionView($productId)
    {
        $menus = Menu::getMenuList();

        $latestNew = News::getLatestNews(3);

        $categories = Category::getCategoriesList();

        $latestProduct = Product::getLatestProducts();

        $productSingle = Product::getProductById($productId);

        $productRandom = Product::getProductRandom($productId);
        
        $userId = User::checkLogget();
        
        $user = User::getUserById($userId);

        require_once (ROOT . '/views/product/view.php');
        return true;
    }
}