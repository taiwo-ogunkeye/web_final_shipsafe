<?php

include("create.good.class.php");

//this is the control class for the good creation

class goodcontrol extends goodcreate{
    private $weight;
    private $customerID;
    private $clerkID;
    private $goodID;
    public $goodObj;

    function __construct($weight, $customerID, $clerkID){
        $this->weight= $weight;
        $this->customerID= $customerID;
        $this->clerkID = $clerkID;

//this is a good object that connects to the database
        $goodObj = new goodcreate();
        $this->goodObj = $goodObj;
    
    }

    
//checks if the input is empty
    function emptyInput(){
        if(empty($this->goodObj->creategood($this->weight, $this->customerID,$this->clerkID)|| empty($this->weight) || empty($this->customerID) || empty($this->clerkID))){
    
            return false;
        }
        else{
            return true;
        }
    }

    function addGood(){
        if($this->emptyInput() == false){
            exit();
        }
        $this->goodObj->creategood($this->goodObj->randID(), $this->weight, $this->customerID, $this->clerkID);
    }

}


?>