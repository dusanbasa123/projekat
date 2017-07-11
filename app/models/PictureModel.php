<?php

/**
 * Description of PictureModel
 *
 * @author Dusan
 */
class PictureModel{
    
    public function getAll(){
        $sql = "SELECT * FROM picture;";
        $prep = DataBase::getInstance()->execute($sql);
        if($prep->execute()){
            return $prep->fetchAll(PDO::FETCH_OBJ);
        }else
            return [];
    }
    
    public static function getByDeviceId($deviceId){
        $sql = "SELECT * FROM picture WHERE device_id = ? ;";
        $prep = DataBase::getInstance()->prepare($sql);
        if($prep->execute()){
            return $prep->fetchAll(PDO::FETCH_OBJ);
        }else{
            return [];
        }
        
    }  
    
    public function add($device_id, $path){
        $sql = "INSERT INTO picture (device_id, path) VALUES (?,?);";
        $prep = DataBase::getInstance()->execute($sql);
        if($prep->execute([$device_id,$path])){
            return DataBase::getInstance()->lastIndertId();
        }else{
            return Null;
        }
    }
    
    public function edit($picture_id, $path){
        $sql = "UPDATE picture SET picture_id = ? , path = ? WHERE picture_id = ? ;";
        $prep = DataBase::getInstance()->execute($sql);
        return($prep->execute([$picture_id, $path]));      
        
    }
        
     
    public function delete($picture_id){
        $sql = "DELETE FROM picture WHERE picture_id = ?;";
        $prep = DataBase::getInstance()->prepare($sql);
        return $prep->execute([$deviceId]);
        
    }
    
     
}
