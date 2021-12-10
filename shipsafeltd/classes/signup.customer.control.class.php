<?php

include("signup.customer.class.php");


//control class for the customer 
class customercontrol extends customersignup{
    private $fname;
    private $lname;
    private $email;
    private $password;
    public $customerObj;

    function __construct($fname, $lname, $email, $password){
        $this->fname=$fname;
        $this->lname= $lname;
        $this->password = $password;
        $this->email = $email;

        $customerObj = new customersignup();
        $this->customerObj = $customerObj;
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

    //functions that validates the user and signs them up
    function signup(){
        if($this->validateEmail()== false){
            exit();
        }
        if($this->emptyInput() == false){
            exit();
        }
        if($this->customerObj->checkemail($this->email)==false){
            exit();
        }
        $this->customerObj->createuser($this->fname, $this->lname, $this->email, $this->password);
    }

}

?>