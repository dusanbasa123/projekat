<?php

/**
 * Description of DescriptionModel
 *
 * @author Dusan
 */
class DescriptionModel{
    
    public function getByDeviceId($deviceId){
        $sql = "SELECT * FROM description WHERE device_id = ?;";
        $prep = DataBase::getInstance()->prepare(sql);
        if($prep->execute([$deviceId])){
            return $prep->fetch(PDO::FETCH_OBJ);
        }else{
            return NULL;
        }
    }
   
     public function add($deviceId, $description){
        $sql = "INSERT INTO description (device_id, description) VALUES (?,?) ";
        $prep = DataBase::getInstance()->prepare{sql};
        if($prep->execute([$deviceId, $description])){
            return true;
        }else{
            return NULL;
        }
     }
    
     public function edit($deviceId, $description){
        $sql = "UPDATE description SET description = ? WHERE device_id = ?;";
        $prep = DataBase::getInstance()->prepare(sql);
        return $prep->execute([$deviceId, $description]);        
    }
    
    
     public function delete($deviceId){
        $sql = "DELETE FROM description WHERE device_id=?";
        $prep = DataBase::getInstance()->prepare(sql);
        return $prep->execute([$deviceId, $description]); 
        }
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
}