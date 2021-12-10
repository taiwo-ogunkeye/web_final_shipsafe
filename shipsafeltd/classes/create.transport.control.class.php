<?php

include("create.transport.class.php");

//control class for the create transport class
class transportcontrol extends transportcreate{
    private $destination;
    private $goodID;
    public $transportObj;

    function __construct($goodID, $destination){
        $this->goodID= $goodID;
        $this->destination = $destination;

//transport object that connects to database
        $transportObj = new transportcreate();
        $this->transportObj = $transportObj;
    
    }

    

    function emptyInput(){
        if(empty($this->transportObj->createtransport($this->goodID, $this->destination)|| empty($this->destination) || empty($this->gooID))){
    
            return false;
        }
        else{
            return true;
        }
    }
//function that adds to database
    function addTransport(){
        if($this->emptyInput() == false){
            exit();
        }
        $this->transportObj->createtransport($this->transportObj->randID(), $this->goodID, $this->destination);
    }

}

?>