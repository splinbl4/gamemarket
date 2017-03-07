<?php


class Menu
{
    public static function getMenuList()
    {
        $db = Db::getConnection();

        $menuList = [];

        $result = $db->query("SELECT * from menus");

        $i = 0;

        while ($row = $result->fetch()) {
            $menuList[$i]['id'] = $row['id'];
            $menuList[$i]['title'] = $row['title'];
            $menuList[$i]['path'] = $row['path'];
            $i++;
        }

        return $menuList;
    }
    
    public static function getMenuById($id) 
    {
        intval($id);

        if ($id) {
            $db = Db::getConnection();

            $sql = ('SELECT * from menus WHERE id = :id');
            $result = $db->prepare($sql);
            $result->bindParam(':id', $id, PDO::PARAM_INT);

            return $result->execute();
        }
    }
}