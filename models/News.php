<?php


class News
{
    const SHOW_BY_DEFAULT = 2;


    public static function getLatestNews($page = 1)
    {
        $page = intval($page);
        
        $count = News::SHOW_BY_DEFAULT;
        $count = intval($count);
        
        $offset = ($page - 1) * self::SHOW_BY_DEFAULT;

        $db = Db::getConnection();

        $sql = 'SELECT id, name, image, description, created_at FROM news '
                . ' ORDER BY id DESC '
                . ' LIMIT :count OFFSET :offset';
        
        $result = $db->prepare($sql);
        $result->bindParam(':count', $count, PDO::PARAM_INT);
        $result->bindParam(':offset', $offset, PDO::PARAM_INT);
        
        $result->setFetchMode(PDO::FETCH_ASSOC);
        $result->execute();
        
        $newsList = [];

        $i = 0;
        while ($row = $result->fetch()) {
            $newsList[$i]['id'] = $row['id'];
            $newsList[$i]['name'] = $row['name'];
            $newsList[$i]['image'] = $row['image'];
            $newsList[$i]['description'] = $row['description'];
            $newsList[$i]['created_at'] = $row['created_at'];
            $i++;
        }

        return $newsList;
    }

    public static function getNewById($id)
    {
        intval($id);

        if ($id) {
            $db = Db::getConnection();

            $sql = 'SELECT * from news WHERE id = :id';
            $result = $db->prepare($sql);
            $result->bindParam(':id', $id, PDO::PARAM_INT);
            $result->setFetchMode(PDO::FETCH_ASSOC);

            $result->execute();
            
            return $result->fetch();
        }
    }
    
    public static function getTotalNews()
    {
        $db = Db::getConnection();
        $result = $db->query('SELECT COUNT(id) AS count FROM news');
        
        $row = $result->fetch();
        return $row['count'];
    }
}