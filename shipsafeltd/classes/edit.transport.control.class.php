<?php

include("edit.transport.class.php");
//control class that edits transport varibles destination
class edittransportdestination extends edittransport{
    private $destination;
    private $transportID;
    public $editTransportObj;

    function __construct($destination, $transportID){
        $this->destination = $destination;
        $this->transportID = $transportID;

        $editTransportObj = new edittransport();
        $this->editTransportObj = $editTransportObj;
    }


    function emptyInput(){
        if(empty($this->destination)|| empty($this->transportID)){
            echo "you haven't sunmitted anything";
            return false;
        }
        else{
            return true;
        }
    }

    //function that edits the variable
    function edit(){
        if($this->emptyInput() == false){
            exit();
        }
        $this->editTransportObj->edittransportfunc($this->destination,$this->transportID);
        echo "edit successful";
    }

}

?>