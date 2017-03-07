<?php


class Category
{
    public static function getCategoriesList()
    {
        $db = Db::getConnection();

        $categoryList = [];

        $result = $db->query("SELECT id, name, alias from categories");

        $i = 0;

        while ($row = $result->fetch()) {
            $categoryList[$i]['id'] = $row['id'];
            $categoryList[$i]['name'] = $row['name'];
            $categoryList[$i]['alias'] = $row['alias'];
            $i++;
        }

        return $categoryList;
    }

    public static function getCategoryById($id)
    {
        intval($id);

        if ($id) {
            $db = Db::getConnection();

            $sql = 'SELECT * from categories WHERE id = :id';
            $result = $db->prepare($sql);
            $result->bindParam(':id', $id, PDO::PARAM_INT);
            $result->setFetchMode(PDO::FETCH_ASSOC);

            $result->execute();
            
            return $result->fetch();
        }
    }
}