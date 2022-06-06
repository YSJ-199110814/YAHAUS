<?php

class Login extends Dbh{
    
    public function getUser($usernameinput){
        
        $sql = "SELECT * FROM tblusers WHERE Username = ? OR EmailAddress = ?";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$usernameinput, $usernameinput]);
        
        $results = $stmt->fetch();
        
        return $results;
    }
}
