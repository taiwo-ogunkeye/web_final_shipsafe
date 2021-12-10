<?php

require("dbconnect.php");

class transportcreate extends Database{

    private $database; //varaiable that connects to database 
    
    function __construct (){
        $database = new Database();
        $this->database= $database;

    }


//creates a random 8 digit id for the transport
    function randID(){
        $transportID= rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9);
        return $transportID;
    }

    function createtransport($goodID, $destination){
        $connect = $this->database->connect(); // this creates a variable connect that connects to the database

        $insertion= $connect->prepare('INSERT INTO transport(transport_id, good_id, destination) VALUES (?,?,?);');

        $transport= array($this->randID(),$goodID, $destination);
        
       if($insertion->execute($transport)){
          // $insertion = null;
           //echo "error";
            //exit();
        }
    }


    //check if transport exists
    function checktrasnport($transportID){
        
        $connect = $this->database->connect();
        $validate= $connect->prepare('SELECT transport_id FROM transport where good_id= ? ');
        
        if(!$validate->execute(array($transportID))){
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