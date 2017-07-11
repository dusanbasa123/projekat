<?php

/**
 * Description of UserModel
 *
 * @author Dusan
 */
class UserModel{
    
    public function getAll(){
        $sql = "SELECT * FROM user;";
        $prep = DataBase::getInstance()->execute($sql);
        if($prep->execute()){
            return $prep->fetchAll(PDO::FETCH_OBJ);
        }else
            return [];
    }
    
    public function getById($user_id){
        $sql = "SELECT * FROM user WHERE user_id = ? ;";
        $prep = DataBase::getInstance()->execute{$sql};
        if($prep->execute()){
            return $prep->fetch(PDO::FETCH_OBJ);
        }else{
            return NULL;
        }
        
    }  
    
    public function add($userId, $password){
        $sql = "INSERT INTO user (user_id, password) VALUES (?,?);";
        $prep = DataBase::getInstance()->execute($sql);
        if($prep->execute([$user_id, $password])){
            return DataBase::getInstance()->lastIndertId();
        }else{
            return Null;
        }
    }


    public function edit($userId ,$username ,$password) {
        $sql = "UPDATE user SET username, password WHERE user_id= ? ;";
        $prep = DataBase::getInstance()->prepare($sql);
        return $prep->execute([$username, $password]);
    }
    
     public function delete($userId) {
        $sql = "DELETE FROM user WHERE user_id = ?;";
        $prep = DataBase::getInstance()->prepare($sql);
        return $prep->execute([$userId]);
    }
    
    public function getByUsernameAndPasswordHash($username, $password) {
        $sql = 'SELECT * FROM user WHERE username = ? AND password = ?;';
        $prep = DataBase::getInstance()->prepare($sql);
        $res = $prep->execute([$username, $password]);
        if ($res) {
            return $prep->fetch(\PDO::FETCH_OBJ);
        }
        return NULL;
    }
 }
