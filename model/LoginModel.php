<?php

class LoginModel{

private static $CorrectUsername = "Admin"; //The Correct information needed to be able to login
private static $CorrectPassword = "Password";
private $UserUserName; //The user inputs will go here
private $UserPassword;

private $IsUserLoggedIn;

private $LoginMessage;
    
    public function CheckLogin($_UserPassword,$_UserUsername){
        $this->IsUserLoggedIn = false;
        $this->UserPassword = $_UserPassword;
        $this->UserUserName = $_UserUsername;
        
        if($this->UserUserName === Self::$CorrectUsername && $this->UserPassword === Self::$CorrectPassword){
             $this->LoginMessage = "Welcome";
             $this->IsUserLoggedIn = true;
        }
        elseif($this->UserUserName === ''){
            $this->LoginMessage = "Username is missing";    
        }
        elseif($this->UserUserName !== '' && $this->UserPassword === ''){
            $this->LoginMessage = "Password is missing";
        }
        elseif($this->UserUserName !== Self::$CorrectUsername){
             $this->LoginMessage = "Wrong name or password";
        }
        elseif($this->UserPassword !== Self::$CorrectPassword){
             $this->LoginMessage = "Wrong name or password";
        }
    }
    
    public function getMessage(){
        return $this->LoginMessage;
    }
    
    public function isUserloggedIn(){
        return $this->IsUserLoggedIn;
    }
}