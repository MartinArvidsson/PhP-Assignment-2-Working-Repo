<?php

class LoginController{
    
    private $view;
    private $Model;
    
    public function __construct(LoginView $view,LoginModel $Model){
      $this -> view = $view;
      $this -> Model = $Model;
    }
    
    //Om ngt är postat, hämta username / password , jämför mot dom statiska i LoginModel, Om dom matchar gå vidare och låt användaren logga in, annars neka dom och rensa fälten.. presentera 
    //meddelande i $message i LoginView.
    
    public function checkLogin(){
        if($this->view->doesUserWantToLogout())
        { //Är man inloggad
            $this->Model->UserWantsToLogout();
        }
        else if($this->view->doesUserWantToLogin())
        { //Försöker logga in
            $this->Model->CheckLogin($this->view->getPassword(),$this->view->getUsername());
        }
        
    }
    
    public function checkLoginStatus(){
       return $this->Model->isUserloggedIn();
    }
    
}