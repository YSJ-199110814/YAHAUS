<?php

/**
* Dbh is the Database Handle class.

This provides a protected method for creating a database connection object, using private attributes containing the server login details.

All classes invoking dbh methods must extend the dbh class and have access to dbh::connect.
*/
class Dbh{
    
    private $driver;
    private $host;
    private $dbname;
    private $username;
    private $password;
        
    public function connect(){
        
        $this->driver = 'mysql';
        $this->host = 'localhost';
        $this->dbname = 'yahaus';
        $this->username = 'root';
        $this->password = '';
         
        $dbs = $this->driver . ':host=' . $this->host . ';dbname='. $this->dbname;
            
        $pdo = new PDO($dbs, $this->username, $this->password); 
        $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
        return $pdo;
    } 
        
}