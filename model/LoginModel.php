<?php

class LoginModel{

private static $CorrectUsername = "Admin";
private static $CorrectPassword = "Password";
public $UserUserName = "";
public $UserPassword = "";

public $LoginMessage ="";
    
    public function GetUserInformation($_UserPassword,$_UserUsername){
        $this->$UserPassword = $_UserPassword;
        $this->$UserUserName = $_UserUsername;
    }
    
    public function CheckInformation(){
     
     if($this->$UserUserName == $this->$CorrectUsername && $this->$UserPassword == $this->$CorrectPassword){
         $LoginMessage = "Welcome";
     }
     elseif($this->$UserUserName != $this->$CorrectUsername){
          $LoginMessage = "Wrong Username";
     }
     elseif($this->$UserPassword != $this->$CorrectPassword){
          $LoginMessage = "Wong Password";
     }
     else{
         $LoginMessage ="Wrong Username and Password";
     }
    }
}