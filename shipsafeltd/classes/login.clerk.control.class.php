<?php

include("login.clerk.class.php");

//control class for login of the clerk

class clerklogincontrol extends clerklogin{
    private $email;
    private $password;
    public $clerkObj;

    function __construct($email, $password){
        $this->password = $password;
        $this->email = $email;

        $clerkObj = new clerklogin();
        $this->clerkObj = $clerkObj;
    }

    function validateEmail(){
            // check if e-mail address is well-formed
            if (!filter_var($this->email, FILTER_VALIDATE_EMAIL)) {
              $emailErr = "Invalid email format";
              echo $emailErr;
              return false;
          }
    }


    function emptyInput(){
        if(empty($this->email)|| empty($this->password)){
            echo "you haven't sunmitted anything";
            return false;
        }
        else{
            return true;
        }
    }

    function login(){
        if($this->validateEmail()== false){
           // exit();
        }
        if($this->emptyInput() == false){
           // exit();
        }
        $this->clerkObj->loginclerk($this->password,$this->email);
        echo "login successful";
       
    }

}


?>