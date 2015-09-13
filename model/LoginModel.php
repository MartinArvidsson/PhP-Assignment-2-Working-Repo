<?php

class LoginModel{

private static $CorrectUsername = "Admin"; //The Correct information needed to be able to login
private static $CorrectPassword = "Password";
private $UserUserName; //The user inputs will go here
private $UserPassword;

//private $IsUserLoggedIn; Wip code

private $LoginMessage;
    
    public function CheckLogin($_UserPassword,$_UserUsername){
        //$this->IsUserLoggedIn = false;
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