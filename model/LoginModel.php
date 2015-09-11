<?php

class LoginModel{

private static $CorrectUsername = "Admin";
private static $CorrectPassword = "Password";
public $UserUserName = "";
public $UserPassword = "";

private $LoginMessage;
    
    public function GetUserInformation($_UserPassword,$_UserUsername){
        $this->UserPassword = $_UserPassword;
        $this->UserUserName = $_UserUsername;
        
        CheckInformation();
    }
    
    public function CheckInformation(){
     
     if($this->UserUserName === Self::CorrectUsername && $this->UserPassword === Self::CorrectPassword){
         $this->LoginMessage = "Welcome";
     }
     elseif($this->UserUserName !== Self::CorrectUsername){
          $this->LoginMessage = "Wrong Username";
     }
     elseif($this->UserPassword !== Self::CorrectPassword){
          $this->LoginMessage = "Wong Password";
     }
     else{
         $this->LoginMessage ="Wrong Username and Password";
     }
    }
    
    public function getMessage(){
        
        var_dump($this->LoginMessage);
        return $this->LoginMessage;
        
    }
}