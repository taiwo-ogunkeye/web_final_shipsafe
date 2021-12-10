<?php

require("dbconnect.php");

//class that edits the names of customers
class editnames extends Database{

    private $database; //varaiable that connects to database 
    
    function __construct (){
        $database = new Database();
        $this->database= $database;

    }

    //function that edits the use information when the id is connected
    function edituser($fname, $lname, $customerID){
        $connect = $this->database->connect(); // this creates a variable connect that connects to the database

        $edit= $connect->prepare('SELECT fname, lname FROM customer WHERE customer_id=(?);');

        $editcustomer= array($customerID); //collects the id as an array

        $edit->execute($editcustomer);
		$edit= $edit->fetch(PDO::FETCH_ASSOC);
        $editVarFname= $edit["fname"];
        $editVarLname= $edit["lname"];
    

        //binds the values that are to be edited 
        $changeName= $connect->prepare('UPDATE customer SET fname =:fname, lname=:lname WHERE customer_id=:id;');
        $changeName->bindValue(':fname', $fname);
        $changeName->bindValue(':lname', $lname);
        $changeName->bindValue(':id', $customerID);
		$changeName->execute();
    }
}
?>