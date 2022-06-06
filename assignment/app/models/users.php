<?php
class Users extends Dbh{
    
    protected function getUser($value, $field='username'){
        $sql = "SELECT * FROM users WHERE " . $field . " = ? ";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$value]);
    
        $results = $stmt->fetchAll();
        return $results;
    }

    protected function getAllUsers(){
        $sql = "SELECT * FROM users";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute();
        
        $results = $stmt->fetchAll();
        return $results;
    }
    
}