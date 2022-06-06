<?php

class LoginContr extends Login{
    private $usernameinput;
    private $passwordinput;
    
    public function __construct($usernameinput, $passwordinput){
        $this->usernameinput = $usernameinput;
        $this->passwordinput = $passwordinput;
    }
    
    ///// PRIVATE FUNCTIONS /////
    
    // returns 'true' unless username or password are set and not empty strings, otherwise false.
    private function isEmpty(){
        $result = true;
        if (!empty($this->usernameinput || $this->passwordinput)){
            if ($this->usernameinput && $this->passwordinput){
                $result = false;
            }
        }
        return $result;
    }
    
    // returns 'true' if login details are authenticated against the database, otherwise false.
    private function authenticate(){
        $row = $this->getUser($this->usernameinput);
        if ($row){
            if (password_verify($this->passwordinput, $row['Password'])){
                return true;
            }
            else{
                echo "Password incorrect.";
                return false;
            }
        }
        else{
            echo "Username not recognised.";
            return false;
        }
    }
    
    // sets a SESSION array variable with key-value pairs.
    private function setSession(){
        $_SESSION['user'] = array(
            'username' => $this->usernameinput,
            'ip' => $_SERVER['REMOTE_ADDR'],
            'time' => time()
        );
    }
    
    
    ///// PUBLIC FUNCTIONS /////
    
    // checks isempty() and authenticate(), then sets SESSION variables and redirects the page.
    public function loginUser(){
        if ($this->isempty()){
            echo "Please enter username and password.";
        }
        else{
            if ($this->authenticate()){
                $this->setSession();
                header("Location: .");
                exit();
            }
        }
    }
    
    // destroys SESSION and redirects the page.
    public function logoutUser(){
        session_start();
        session_destroy();
        header("Location:login.php");
    }
}