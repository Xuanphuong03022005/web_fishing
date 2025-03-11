<?php
    class ProductModel extends MasterModel{
        public static function get_by(){
            $db = Database::getDB();
            $query = "SELECT p.*, c.name AS category_name, f.location AS location_name 
                    FROM product p
                    JOIN factories f
                    ON p.factory_id = f.id
                    JOIN categories c
                    ON p.category_id = c.id
                    ORDER BY p.id ASC";
            $statement = $db->prepare($query);
            $statement ->execute();
            $result = $statement->fetchAll();
            $statement ->closeCursor();
            return $result;
        }
        public static function get_all(){
            $db = Database::getDB();
            $query = "SELECT p.*, c.name AS category_name, f.location AS location_name 
                    FROM product p
                    JOIN factories f
                    ON p.factory_id = f.id
                    JOIN categories c
                    ON p.category_id = c.id
                    ORDER BY p.id ASC";
            $statement = $db->prepare($query);
            $statement ->execute();
            $result = $statement->fetchAll();
            $statement ->closeCursor();
            return $result;
        }
        public static function add_product($image, $name, $price, $categoy, $factory){
            $db = Database::getDB();
            $query = "INSERT INTO product(image, name, price, category_id, factory_id)
            VALUE ( ?, ?, ?, ?, ?)";
            $statement =$db->prepare($query);
            $statement->bindParam(1, $image);
            $statement->bindParam(2, $name);
            $statement->bindParam(3, $price);
            $statement->bindParam(4, $categoy);
            $statement->bindParam(5, $factory);
            $statement->execute();
            $statement->closeCursor();
        }
        public static function update_product($id, $image, $name, $price, $factory, $categoy) {
            $db = Database::getDB();
            $query = "UPDATE product SET image =?, name=?, price =?, factory_id=?, category_id=? WHERE id=?";
            $statement =$db->prepare($query);
            $statement ->bindParam(1, $image);
            $statement ->bindParam(2, $name);
            $statement ->bindParam(3, $price);
            $statement ->bindParam(4, $factory);
            $statement ->bindParam(5, $categoy);
            $statement ->bindParam(6, $id);
            $statement ->execute();
            $statement ->closeCursor();
        }
        public static function delete_product($id) {
            $db = Database::getDB();
            $query = "DELETE FROM product WHERE id=?";
            $statement = $db->prepare($query);
            $statement-> bindParam(1, $id);
            $statement->execute();
            $statement->closeCursor();
        }
        public static function search_product($data) {
            $db =Database::getDB();
            $query = "SELECT p.*, f.location as location_name , c.name as category_name FROM product p 
            JOIN factories f ON p.factory_id = f.id
            JOIN categories c ON p.category_id = c.id
            WHERE c.name LIKE ?
            OR f.location LIKE ?
            OR p.name LIKE ?";
            $statement = $db ->prepare($query);
            $searchValue = '%'.$data.'%';
            $statement->bindParam(1, $searchValue);
            $statement->bindParam(2, $searchValue);
            $statement->bindParam(3, $searchValue);
            $statement->execute();
            $result = $statement->fetchAll();
            $statement->closeCursor();
            return $result;
        }
        public static function arrange_product($data){
            $db = Database::getDB();
            $query = "SELECT p.*, c.name AS category_name, f.location AS location_name 
                    FROM product p
                    JOIN factories f
                    ON p.factory_id = f.id
                    JOIN categories c
                    ON p.category_id = c.id
                    ORDER BY price $data";
            $statement = $db->prepare($query);
            $statement ->execute();
            $result = $statement->fetchAll();
            $statement ->closeCursor();
            return $result;
        }
    }
?>