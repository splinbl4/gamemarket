<?php

class Product
{
    const SHOW_BY_DEFAULT = 3;


    public static function getLatestProducts($page = 1)
    {
        $page = intval($page);
        
        $count = Product::SHOW_BY_DEFAULT;

        $count = intval($count);
        $offset = ($page - 1) * self::SHOW_BY_DEFAULT;

        $db = Db::getConnection();

        $sql = 'SELECT id, name, image, price FROM products '
                . ' ORDER BY id DESC '
                . ' LIMIT :count OFFSET :offset';

        $result = $db->prepare($sql);
        $result->bindParam(':count', $count, PDO::PARAM_INT);
        $result->bindParam(':offset', $offset, PDO::PARAM_INT);

        $result->setFetchMode(PDO::FETCH_ASSOC);
        
        // Выполнение коменды
        $result->execute();
        
        $productList = [];
                
        $i = 0;
        while ($row = $result->fetch()) {
            $productList[$i]['id'] = $row['id'];
            $productList[$i]['name'] = $row['name'];
            $productList[$i]['image'] = $row['image'];
            $productList[$i]['price'] = $row['price'];
            $i++;
        }

        return $productList;
    }


    public static function getProductListByCategory($categoryId = false, $page = 1)
    {
        $categoryId = intval($categoryId);

        if ($categoryId) {
            
            $page = intval($page);
        
            $count = self::SHOW_BY_DEFAULT;

            $count = intval($count);
            $offset = ($page - 1) * $count;
            
            $db = Db::getConnection();

            $sql = 'SELECT id, name, image, price FROM products '
                . 'WHERE category_id = :category_id '
                . 'ORDER BY id ASC LIMIT :count OFFSET :offset';

            $result = $db->prepare($sql);
            $result->bindParam(':category_id', $categoryId, PDO::PARAM_INT);
            $result->bindParam(':count', $count, PDO::PARAM_INT);
            $result->bindParam(':offset', $offset, PDO::PARAM_INT);
            $result->execute();
            
            $products = [];
            
            $i = 0;

            while ($row = $result->fetch()) {
                $products[$i]['id'] = $row['id'];
                $products[$i]['name'] = $row['name'];
                $products[$i]['image'] = $row['image'];
                $products[$i]['price'] = $row['price'];
                $i++;
            }

            return $products;
        }

    }

    public static function getProductById($id)
    {
        intval($id);

        if ($id) {
            $db = Db::getConnection();

            $sql = ('SELECT * from products WHERE id = :id');
            $result = $db->prepare($sql);
            $result->bindParam(':id', $id, PDO::PARAM_INT);
            $result->setFetchMode(PDO::FETCH_ASSOC);

            $result->execute();
            
            return $result->fetch();
        }
    }

    public static function getProductRandom()
    {

        $db = Db::getConnection();

        $row_count = $db->query('SELECT COUNT(id) FROM products');
        $row_count = $row_count->fetchColumn();

        $rand_row = rand(1, $row_count);

        $sql = 'SELECT * FROM products WHERE id = :rand_row';

        $result = $db->prepare($sql);
        $result->bindParam(':rand_row', $rand_row, PDO::PARAM_INT);
        $result->setFetchMode(PDO::FETCH_ASSOC);

        $result->execute();
            
        return $result->fetch();
    }

    public static function getTotalProduct()
    {
        $db = Db::getConnection();
        $result = $db->query('SELECT COUNT(id) AS count FROM products');
        
        $row = $result->fetch();
        return $row['count'];
    }
    
    public static function getTotalProductsInCategory($categoryId)
    {
        $db = Db::getConnection();

        $sql = 'SELECT count(id) AS count FROM products WHERE category_id = :category_id';

        $result = $db->prepare($sql);
        $result->bindParam(':category_id', $categoryId, PDO::PARAM_INT);

        $result->execute();

        $row = $result->fetch();
        return $row['count'];
    }
}