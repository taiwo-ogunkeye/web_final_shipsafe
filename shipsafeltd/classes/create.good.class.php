<?php

require("dbconnect.php");

//this is a class that creates a new good item in the database 
class goodcreate extends Database{

    private $database; //varaiable that connects to database 
    
    function __construct (){
        $database = new Database();
        $this->database= $database;

    }

// this generates a random 7 digut number for the good id

    function randID(){
        $goodID= rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9);
        return $goodID;
    }


    //function that creates the good for the user
    function creategood($weight, $customerID, $clerkID){
        $connect = $this->database->connect(); // this creates a variable connect that connects to the database

        $insertion= $connect->prepare('INSERT INTO good(good_id, weight, customer_id, clerk_id) VALUES (?, ?, ?,?);');

        $good= array($this->randID(),$weight, $customerID, $clerkID);
        
        if(!$insertion->execute($good)){
            $insertion = null;
            echo "error";
            exit();
        }
    }


    //check if good exists
    function checkgood($goodID){
        
        $connect = $this->database->connect();
        $validate= $connect->prepare('SELECT good_id FROM clerk where good_id= ? ');
        
        if(!$validate->execute(array($goodID))){
            return false;
            exit();
        }

        if($validate->rowcount()>0){
            $answer= false;
            echo "id already in use";
        }
       else{
           $answer= true;
       }
       return $answer;
    }
}

?>