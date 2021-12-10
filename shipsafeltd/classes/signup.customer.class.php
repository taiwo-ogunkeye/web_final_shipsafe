<?php

require("dbconnect.php");

class customersignup extends Database{

    private $database; //varaiable that connects to database 
    
    function __construct (){
        $database = new Database();
        $this->database= $database;

    }


    //function that creates the customer and adds it to the database 
    function createuser($fname, $lname, $email, $password){
        $connect = $this->database->connect(); // this creates a variable connect that connects to the database

        $insertion= $connect->prepare('INSERT INTO customer(fname, lname, email, password) VALUES (?, ?, ?, ?)');

        $customer= array($fname, $lname, $email, $password);

        if(!$insertion->execute($customer)){
            $insertion = null;
            echo "error";
            exit();
        }
    }


    //check if email exists
    function checkemail($email){
        
        $connect = $this->database->connect();
        $validate= $connect->prepare('SELECT email FROM customer where email= ? ');
        
        if(!$validate->execute(array($email))){
            $customer = null;
            exit();
        }

        if($validate->rowcount()>0){
            $answer= false;
            echo "you already have an account";
        }
       else{
           $answer= true;
       }
       return $answer;
    }
}


?>