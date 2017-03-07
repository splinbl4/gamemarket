<?php

class NewsController
{
    public function actionIndex($rand_row, $page = 1)
    {
        $menus = Menu::getMenuList();

        $latestNew = News::getLatestNews($page);

        $categories = Category::getCategoriesList();

        $latestProduct = Product::getLatestProducts(1);
        
        $total = News::getTotalNews();

        $pagination = new Pagination($total, $page, News::SHOW_BY_DEFAULT, 'page-');

        $productRandom = Product::getProductRandom($rand_row);
        
        $userId = User::checkLogget();
        
        $user = User::getUserById($userId);

        require_once (ROOT . '/views/news/index.php');

        return true;
    }
    
    public function actionView($newId)
    {

        $menus = Menu::getMenuList();

        $latestNew = News::getLatestNews(1);

        $categories = Category::getCategoriesList();

        $latestProduct = Product::getLatestProducts(1);

        $newSingle = News::getNewById($newId);

        $productRandom = Product::getProductRandom($newId);
        
        $userId = User::checkLogget();
        
        $user = User::getUserById($userId);

        require_once (ROOT . '/views/news/view.php');
        return true;
    }
}