<?php

require("dbconnect.php");


class edittransport extends Database{

    private $database; //varaiable that connects to database 
    
    function __construct (){
        $database = new Database();
        $this->database= $database;

    }

    //function that edits the transport variable
    function edittransportfunc($destination, $transportID){
        $connect = $this->database->connect(); // this creates a variable connect that connects to the database

        $edit= $connect->prepare('SELECT destination FROM transport WHERE transport_id=(?);');

        $edittransport= array($transportID);

        $edit->execute($edittransport);
		$edit= $edit->fetch(PDO::FETCH_ASSOC);
        $editVarTrans= $edit["destination"];
       
       

        $changeTransport= $connect->prepare('UPDATE transport SET destination=:destination WHERE transport_id=:id;');
        $changeTransport->bindValue(':destination', $destination);
        $changeTransport->bindValue(':id', $transportID);
		$changeTransport->execute();
    }
}

?>