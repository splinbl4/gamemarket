<?php

class SiteController extends Controller
{
    
    public function actionIndex($rand_row, $page = 1)
    {
        $menus = $this->menus;
        
        $categories = $this->categories;
        
        $latestNew = $this->latestNew;

        $productRandom = $this->productRandom;
        
        $userId = $this->userId;
        
        $user = $this->user;
        
        $latestProduct = Product::getLatestProducts($page);
        
        $total = Product::getTotalProduct();

        $pagination = new Pagination($total, $page, Product::SHOW_BY_DEFAULT, 'page-');

        require_once (ROOT . '/views/site/index.php');
        return true;
    }
}