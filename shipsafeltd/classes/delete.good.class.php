<?php

require("dbconnect.php");

class deletegoodclass extends Database{

    private $database; //varaiable that connects to database 
    
    function __construct (){
        $database = new Database();
        $this->database= $database;

    }

    //function that deletes the good

    function deletegood($goodID){
        $connect = $this->database->connect(); // this creates a variable connect that connects to the database

        $insertion= $connect->prepare('DELETE FROM good WHERE good_id=(?);');

        $good= array($goodID);
        

        if(!$insertion->execute($good)){
            $insertion = null;
            echo "error";
            exit();
        }
    }


    //check if good exists
    function checkgood($goodID){
        
        $connect = $this->database->connect();
        $validate= $connect->prepare('SELECT good_id FROM good where good_id= ? ');
        
        if(!$validate->execute(array($goodID))){
            return false;
            exit();
        }

        if($validate->rowcount()==0){
            $answer= false;
            echo "id does not exist";
        }
       else{
           $answer= true;
       }
       return $answer;
    }
}



?>