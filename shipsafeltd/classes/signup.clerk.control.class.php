<?php

include("signup.clerk.class.php");

class clerkcontrol extends clerksignup{
    private $fname;
    private $lname;
    private $email;
    private $password;
    public $clerkObj;

    function __construct($fname, $lname, $email, $password){
        $this->fname=$fname;
        $this->lname= $lname;
        $this->password = $password;
        $this->email = $email;


        $clerkObj = new clerksignup();
        $this->clerkObj = $clerkObj;
    
    }

    function validateEmail(){
            // check if e-mail address is well-formed
            if (!filter_var($this->email, FILTER_VALIDATE_EMAIL)) {
              $emailErr = "Invalid email format";
              echo $emailErr;
              return false;
          }

          else{
              return true;
          }
    }


    function emptyInput(){
        if(empty($this->email)|| empty($this->password) || empty($this->fname) || empty($this->lname)){
            echo "you haven't sunmitted anything";
            return false;
        }
        else{
            return true;
        }
    }

    //function that creates the clerk

    function signup(){
        if($this->validateEmail()== false){
            exit();
        }
        if($this->emptyInput() == false){
           exit();
        }
        if($this->clerkObj->checkemail($this->email)==false){
            exit();
        }
        $this->clerkObj->createclerk($this->clerkObj->randID(), $this->fname, $this->lname, $this->email, $this->password);
    }

}


?>