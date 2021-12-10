<?php

include("create.payment.class.php");

//control class of the create payment class

class paymentcontrol extends payment{
    private $amount;
    private $customerID;
    private $clerkID;
    private $paymentID;
    public $paaymentObj;

    function __construct($amount, $customerID, $clerkID){
        $this->amount= $amount;
        $this->customerID= $customerID;
        $this->clerkID = $clerkID;

//paymemnt object that connects to the database
        $paymentObj = new payment();
        $this->paymentObj = $paymentObj;
    
    }

    
//checks if the input is empty
    function emptyInput(){
        if(empty($this->paymentObj->paymentcreate($this->amount, $this->customerID,$this->clerkID)|| empty($this->amount) || empty($this->customerID) || empty($this->clerkID))){
    
            return false;
        }
        else{
            return true;
        }
    }
//function that finally adds to the database
    function addPayment(){
        if($this->emptyInput() == false){
            exit();
        }
        $this->paymentObj->paymentcreate($this->goodObj->randID(), $this->weight, $this->customerID, $this->clerkID);
    }

}


?>