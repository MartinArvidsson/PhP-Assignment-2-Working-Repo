<?php

class LoginModel{

private static $CorrectUsername = "Admin";
private static $CorrectPassword = "Password";
private $UserUserName;
private $UserPassword;
private $IsUserLoggedIn;

private $LoginMessage;
    
    public function CheckLogin($_UserPassword,$_UserUsername){
        $this->IsUserLoggedIn = false;
        $this->UserPassword = $_UserPassword;
        $this->UserUserName = $_UserUsername;
        
        if($this->UserUserName === Self::$CorrectUsername && $this->UserPassword === Self::$CorrectPassword){
             $this->LoginMessage = "Welcome";
        }
        elseif($this->UserUserName !== Self::$CorrectUsername){
             $this->LoginMessage = "Wrong Username";
        }
        elseif($this->UserPassword !== Self::$CorrectPassword){
             $this->LoginMessage = "Wong Password";
        }
        else{
            $this->LoginMessage ="Wrong Username and Password";
        }
    }
    
    
    public function getMessage(){
        return $this->LoginMessage;
    }
}