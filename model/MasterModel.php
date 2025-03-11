<?php
class MasterModel{
    public static function get_all_from($table){
        $db = Database::getDB();
        $query = "SELECT * FROM  $table ORDER BY id ASC";
        $statement = $db->prepare($query);
        $statement ->execute();
        $result = $statement->fetchAll();
        $statement ->closeCursor();
        return $result;
    }
    public static function get_by_id($id){
        $db = Database::getDB();
        $query = "SELECT * FROM product WHERE id = ?";
        $statement =$db->prepare($query);
        $statement->bindParam(1, $id);
        $statement->execute();
        $result =$statement->fetch();
        $statement->closeCursor();
        return $result;
    }

}
?>