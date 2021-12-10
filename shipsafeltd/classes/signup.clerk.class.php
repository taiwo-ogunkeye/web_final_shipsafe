<?php

require("dbconnect.php");

class clerksignup extends Database{

    private $database; //varaiable that connects to database 
    
    function __construct (){
        $database = new Database();
        $this->database= $database;

    }
//generates a random 7 digit id for the clerk
    function randID(){
        $clerkID= rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9);
        return $clerkID;
    }
//function that creates the clerk information in the database
    function createclerk($clerkID,$fname, $lname, $email, $password){
        $connect = $this->database->connect(); // this creates a variable connect that connects to the database

        $insertion= $connect->prepare('INSERT INTO clerk(clerk_id, fname, lname, email, password) VALUES (?,?, ?, ?, ?);');

        $clerk= array($this->randID(), $fname, $lname, $email, $password);
    

        if(!$insertion->execute($clerk)){
            $insertion = null;
            echo "error";
            exit();
        }
    }


    //check if email exists
    function checkemail($email){
        
        $connect = $this->database->connect();
        $validate= $connect->prepare('SELECT email FROM clerk where email= ? ');
        
        if(!$validate->execute(array($email))){
            return false;
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