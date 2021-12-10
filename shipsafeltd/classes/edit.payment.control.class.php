<?php

include("edit.payment.class.php");
//editpayment control class
class editpaymentamount extends editpayment{
    private $amount;
    private $paymentID;
    public $editPaymentObj;

    function __construct($amount, $paymentID){
        $this->amount = $amount;
        $this->paymentID = $paymentID;

        $editPaymentObj = new editpayment();
        $this->editPaymentObj = $editPaymentObj;
    }



    function emptyInput(){
        if(empty($this->amount)|| empty($this->paymentID)){
            echo "you haven't sunmitted anything";
            return false;
        }
        else{
            return true;
        }
    }

    function edit(){
        if($this->emptyInput() == false){
            exit();
        }
        $this->editPaymentObj->editpaymentfunc($this->amount,$this->paymentID);
        echo "edit successful";
    }

}

?>