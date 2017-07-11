<?php

/**
 * Description of DeviceModel
 *
 * @author Dusan
 */
class DeviceModel{
    
    public static function getAll(){
        $sql = "SELECT * FROM device;";
        $prep = DataBase::getInstance()->prepare($sql);
        if($prep->execute()){
            return $prep->fetchAll(PDO::FETCH_OBJ);
        }else
            return [];
    }
    
    public static function getSpecifications($device_id){
        $sql = "SELECT * FROM specification "
                . "LEFT JOIN device_specification "
                . "ON specification.specification_id = device_specification.specification_id "
                . "WHERE device_specification.device_id = ?";
        $prep = DataBase::getInstance()->prepare($sql);
        if($prep->execute([$device_id])){
            return $prep->fetchAll(PDO::FETCH_OBJ);
        }else
            return [];
    }

    public static function getById($deviceId){
        $sql = "SELECT * FROM device WHERE device_id = ? ;";
        $prep = DataBase::getInstance()->prepare($sql);
        if($prep->execute([$deviceId])){
            return $prep->fetch(PDO::FETCH_OBJ);
        }else{
            return NULL;
        }
    }
    
    public static function addCategory($deviceId, $categoryId){
        $sql = "INSERT INTO device_category (device_id, category_id) VALUES (?,?);";
        $prep = DataBase::getInstance()->prepare($sql);
        if($prep->execute([$deviceId, $categoryId])){
            return DataBase::getInstance()->lastIndertId();
        }else{
            return Null;
        }
    }
    
    public static function getByCategoryId($categoryId){
        $sql = "SELECT * FROM device_category "
                . "LEFT JOIN device ON device_category.device_id = device.device_id "
                . "WHERE device_category.category_id = ?;";
        $prep = DataBase::getInstance()->prepare($sql);
        if($prep->execute([$categoryId])){
            return $prep->fetchAll(PDO::FETCH_OBJ);
        } else {
            return [];
        }
    }
    
    public static function add($name, $price, $description, $manucatorId){
        $sql = "INSERT INTO device (name, price, description) VALUES (?,?,?,?);";
        $prep = DataBase::getInstance()->prepare($sql);
        if($prep->execute([$name, $price, $description, $manucatorId])){
            return DataBase::getInstance()->lastIndertId();
        }else{
            return Null;
        }
    }
    
    public function edit($deviceId, $name, $price){
        $sql = "UPDATE device SET name = ? , price = ? WHERE device_id = ? ;";
        $prep = DataBase::getInstance()->prepare($sql);
        return($prep->execute([$name,$price, $deviceId]));      
        
    }
        
     
    public function delete($deviceId){
        $sql = "DELETE FROM device WHERE device_id = ?;";
        $prep = DataBase::getInstance()->prepare($sql);
        return $prep->execute([$deviceId]);
        
    }
    
     
}