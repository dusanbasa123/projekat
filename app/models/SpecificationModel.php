<?php

/**
 * Description of SpecificationModel
 *
 * @author Dusan
 */
class SpecificationModel {
    public static function getAll(){
        $sql = "SELECT * FROM specification;";
        $prep = DataBase::getInstance()->prepare($sql);
        if($prep->execute()){
            return $prep->fetchAll(PDO::FETCH_OBJ);
        } else {
            return [];
        }
    }
    
    public static function getSpecsByCategory($categoryId){
        $sql = "SELECT specification.specification_id, specification.name "
                . "FROM device "
                . "LEFT JOIN device_category ON device.device_id = device_category.device_id "
                . "LEFT JOIN device_specification ON device.device_id = device_specification.device_id "
                . "LEFT JOIN specification ON device_specification.specification_id = specification.specification_id "
                . "WHERE device_category.category_id = ? "
                . "GROUP BY specification.specification_id, specification.name;";
        $prep = DataBase::getInstance()->prepare($sql);
        if($prep->execute([$categoryId])){
            return $prep->fetchAll(PDO::FETCH_OBJ);
        } else {
            return [];
        }
    }
    
    public static function getSpecificationsBySpecIdAndCategoryId($specId, $categoryId){
        $sql = "SELECT device_specification.value as value "
                . "FROM device "
                . "LEFT JOIN device_category ON device.device_id = device_category.device_id "
                . "LEFT JOIN device_specification ON device.device_id = device_specification.device_id "
                . "LEFT JOIN specification ON device_specification.specification_id = specification.specification_id "
                . "WHERE device_category.category_id = ? "
                . "AND specification.specification_id = ? "
                . "GROUP BY device_specification.value;";
        $prep = DataBase::getInstance()->prepare($sql);
        if($prep->execute([$categoryId, $specId])){
            return $prep->fetchAll(PDO::FETCH_OBJ);
        } else {
            return [];
        }
    }
    
    public function getById($specificationId){
        $sql = "SELECT * FROM specification WHERE specification_id = ?;";
        $prep = DataBase::getInstance()->prepare($sql);
        if($prep->execute([$specificationId])){
            return $prep->fetch(PDO::FETCH_OBJ);
        } else {
            return null;
        }
    }
    
    public static function add($name){
        $sql = "INSERT INTO specification (name) VALUE (?);";
        $prep = DataBase::getInstance()->prepare($sql);
        if($prep->execute([$name])){
            return $prep->fetch(PDO::FETCH_OBJ);
        } else {
            return null;
        }            
    }
    
    
      public function edit($specifition_id, $name){
        $sql = "UPDATE specification SET name = ? WHERE specification_id = ? ;";
        $prep = DataBase::getInstance()->prepare($sql);
        if($prep->execute([$name])){
            return $prep->fetch(PDO::FETCH_OBJ);
        } else {
            return null;
        }            
    }
    
    
        public function delete($specification_id){
        $sql = "DELETE FROM specification WHERE specification_id = ?;";
        $prep = DataBase::getInstance()->prepare($sql);
        if($prep->execute([specification_id])){
            return $prep->fetch(PDO::FETCH_OBJ);
        } else {
            return null;
        }            
    }
    
}
