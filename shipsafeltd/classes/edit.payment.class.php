<?php

require("dbconnect.php");

//class that edits payment information
class editpayment extends Database{

    private $database; //varaiable that connects to database 
    
    function __construct (){
        $database = new Database();
        $this->database= $database;

    }

    //function that edits payment
    function editpaymentfunc($amount, $paymentID){
        $connect = $this->database->connect(); // this creates a variable connect that connects to the database

        $edit= $connect->prepare('SELECT amount FROM payment WHERE payment_id=(?);');

        $editpayment= array($paymentID); //gets payment_id in the form an id 

        $edit->execute($editpayment);
		$edit= $edit->fetch(PDO::FETCH_ASSOC);
        $editVarPayment= $edit["amount"];
    
       //binds the values for editting 
        $changeAmount= $connect->prepare('UPDATE payment SET amount=:amount WHERE payment_id=:id;');
        $changeAmount->bindValue(':amount', $amount);
        $changeAmount->bindValue(':id', $paymentID);
		$changeAmount->execute();
    }
}

?>