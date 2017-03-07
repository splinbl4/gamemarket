<?php


class Controller {
    
    protected $menus;
    protected $categories;
    //protected $latestProduct;
    protected $latestNew;
    protected $userId;
    protected $user;
    protected $productRandom;


    public function __construct() {

        $this->menus = Menu::getMenuList();

        $this->categories = Category::getCategoriesList();

        //$this->latestProduct = Product::getLatestProducts($page);

        $this->latestNew = News::getLatestNews(1);
        
        $this->userId = User::checkLogget();
        
        $this->user = User::getUserById($this->userId);

        $this->productRandom = Product::getProductRandom();
        
        //$total = Product::getTotalProduct();

        //$pagination = new Pagination($total, $page, Product::SHOW_BY_DEFAULT, 'page-');

    }
}
