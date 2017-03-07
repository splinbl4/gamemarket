<?php


class CategoryController 
{
    public function actionIndex($categoryId, $page = 1)
    {

        $menus = Menu::getMenuList();

        $categories = Category::getCategoriesList();

        $latestNew = News::getLatestNews();

        $categoryProducts = Product::getProductListByCategory($categoryId, $page);

        $categoryName = Category::getCategoryById($categoryId);
        
        $total = Product::getTotalProductsInCategory($categoryId);

        $pagination = new Pagination($total, $page, Product::SHOW_BY_DEFAULT, 'page-');

        $productRandom = Product::getProductRandom($categoryId);
        
        $userId = User::checkLogget();
        
        $user = User::getUserById($userId);

        require_once (ROOT . '/views/category/index.php');
        return true;
    }
}
