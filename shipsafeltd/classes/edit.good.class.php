<?php

require("dbconnect.php");

//class that edits good 
class editgood extends Database{

    private $database; //varaiable that connects to database 
    
    function __construct (){
        $database = new Database();
        $this->database= $database;

    }

    //function that edits good
    function editgood($weight, $goodID){
        $connect = $this->database->connect(); // this creates a variable connect that connects to the database

        $edit= $connect->prepare('SELECT weight FROM good WHERE good_id=(?);');

        $editgood= array($goodID);// collects the good id as an array

        $edit->execute($editgood);
		$edit= $edit->fetch(PDO::FETCH_ASSOC);
        $editVarGood= $edit["weight"];
    
        $changeGood= $connect->prepare('UPDATE good SET weight=:weight WHERE good_id=:id;'); //binds the values together
        $changeGood->bindValue(':weight', $weight);
        $changeGood->bindValue(':id', $goodID);
		$changeGood->execute();
    }
}
    
?>