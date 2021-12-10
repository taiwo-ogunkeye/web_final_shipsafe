<?php

require("dbconnect.php");

//class that adds to the payment table of the database
class payment extends Database{

    private $database; //varaiable that connects to database 
    
    function __construct (){
        $database = new Database();
        $this->database= $database;

    }


//function that generates a 10 didgit id for the payment table
    function randID(){
        $paymentID= rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9);
        return $paymentID;
    }


    //function that creates the payment entry of the database
    function paymentcreate($amount,$customerID, $clerkID){
        $connect = $this->database->connect(); // this creates a variable connect that connects to the database

        $insertion= $connect->prepare('INSERT INTO payment(payment_id,amount,customer_id, clerk_id) VALUES (?, ?, ?,?);');

        $payment= array($this->randID(),$amount, $customerID, $clerkID);
       

        if(!$insertion->execute($payment)){
           $insertion = null;
           echo "error";
           exit();
       }
    }


    //check if payment exists
    function checkpayment($paymentID){
        
        $connect = $this->database->connect();
        $validate= $connect->prepare('SELECT payment_id FROM payment where payment_id= ? ');
        
        if(!$validate->execute(array($paymentID))){
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