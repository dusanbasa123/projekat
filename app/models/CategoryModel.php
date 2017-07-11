<?php

/**
 * Description of CateryModel
 *
 * @author Dusan
 */
class CategoryModel{
    
    public static function getAll(){
        $sql = "SELECT * FROM category;";
        $prep = DataBase::getInstance()->prepare($sql);
        if($prep->execute()){
            return $prep->fetchAll(PDO::FETCH_OBJ);
        } else {
            return [];
        }
    }
    
    public static function getById($categoryId){
        $sql = "SELECT * FROM category WHERE category_id = ? ;";
        $prep = DataBase::getInstance()->prepare($sql);
        if($prep->execute([$categoryId])){
            return $prep->fetch(PDO::FETCH_OBJ);
        } else {
            return NULL;
        }
    }
    
    public static function add($categoryName) {
        $sql = "INSERT INTO category (category_name) VALUES (?) ;";
        $prep = DataBase::getInstance()->prepare($sql);
        if($prep->execute([$categoryId])){
            return DataBase::getInstance()->lastInsertId();
        }else{
            return NULL;
        } 
    }
       
    public function edit($categoryId, $categoryName) {
        $sql = "UPDATE category SET category_name = ? WHERE category_id = ?;" ;
        $prep = DataBase::getInstance()->prepare($sql);
        return $prep->execute([$categoryName, $categoryId]);
    }
    
     public function delete($categoryId) {
        $sql = "DELETE FROM category WHERE category_id = ?;";
        $prep = DataBase::getInstance()->prepare($sql);
        return $prep->execute([$categoryId]);
    }
}