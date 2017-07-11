<?php

/**
 * Description of LogModel
 *
 * @author Dusan
 */
class LogModel{
    
    public function getAll(){
        $sql = "SELECT * FROM log;";
        $prep = DataBase::getInstance()->execute($sql);
        if($prep->execute()){
            return $prep->fetchAll(PDO::FETCH_OBJ);
        }else
            return [];
    }
    
    public function getById($log_id){
        $sql = "SELECT * FROM log WHERE log_id = ? ;";
        $prep = DataBase::getInstance()->execute{$sql};
        if($prep->execute()){
            return $prep->fetch(PDO::FETCH_OBJ);
        }else{
            return NULL;
        }
        
    }  
    
    public static function add($user_id, $ip){
        $sql = "INSERT INTO log (user_id, ip) VALUES (?,?);";
        $prep = DataBase::getInstance()->execute($sql);
        if($prep->execute([$user_id, $ip])){
            return DataBase::getInstance()->lastIndertId();
        }else{
            return Null;
        }
    }
}
