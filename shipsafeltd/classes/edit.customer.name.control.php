<?php

include("edit.customer.name.class.php");

// control class that edits name 
class editcustomername extends editnames{
    private $fname;
    private $lname;
    private $customerID;
    public $editCustomerObj;

    function __construct($fname, $lname, $customerID){
        $this->fname = $fname;
        $this->lname = $lname;
        $this->customerID = $customerID;

        $editCustomerObj = new editnames();
        $this->editCustomerObj = $editCustomerObj;
    }


    function emptyInput(){
        if(empty($this->fname)|| empty($this->lname)){
            echo "you haven't sunmitted anything";
            return false;
        }
        else{
            return true;
        }
    }
//functions that edit the user name
    function edit(){
        if($this->emptyInput() == false){
            exit();
        }
        $this->editCustomerObj->edituser($this->fname, $this->lname, $this->customerID);
        echo "edit successful";
    }

}
?>