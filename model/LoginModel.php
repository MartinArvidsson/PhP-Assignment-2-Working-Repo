<?php
session_start();
class LoginModel{

private static $CorrectUsername = "Admin"; //The Correct information needed to be able to login
private static $CorrectPassword = "Password";
private $UserUserName; //The user inputs will go here
private $UserPassword;
private $IsUserLoggedIn;
private $LoginMessage;
    
    public function __construct(){
	 if(!isset($_SESSION['USERLOGGEDIN']))
             {
                 $_SESSION['USERLOGGEDIN'] = false;
             }	
	}
    
    public function CheckLogin($_UserPassword,$_UserUsername)
    {
        $this->UserPassword = $_UserPassword;
        $this->UserUserName = $_UserUsername;
       
        if($this->UserUserName == Self::$CorrectUsername && $this->UserPassword == Self::$CorrectPassword)
        {
            if($_SESSION['USERLOGGEDIN'] == false)
            {
             $this->LoginMessage = "Welcome";
            }
             
             $_SESSION['USERLOGGEDIN'] = true;
        }
        elseif($this->UserUserName == '')
        {
            $this->LoginMessage = "Username is missing";    
        }
        elseif($this->UserUserName != '' && $this->UserPassword === ''){
            $this->LoginMessage = "Password is missing";
        }
        elseif($this->UserUserName != Self::$CorrectUsername)
        {
             $this->LoginMessage = "Wrong name or password";
        }
        elseif($this->UserPassword != Self::$CorrectPassword)
        {
             $this->LoginMessage = "Wrong name or password";
        }
    }
    
    public function getMessage()
    {
        return $this->LoginMessage;
    }
    
    public function UserWantsToLogout()
    {
        //Ta bort session, rensa cookies etc.
        if($_SESSION['USERLOGGEDIN'] == true)
        {
            $this->LoginMessage = "Bye bye!";
        }
        unset($_SESSION['USERLOGGEDIN']);
        session_destroy();
        return $this->LoginMessage;
    }
    
    public function Issessionset()
    {
        if(isset($_SESSION['USERLOGGEDIN']))
        {
            return $_SESSION['USERLOGGEDIN'];
        }
    }
}