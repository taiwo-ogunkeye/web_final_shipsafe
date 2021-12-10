<?php

include "../classes/edit.payment.control.class.php";

//if the submit button is clicked it changes the payment amount
if(isset($_POST['update'])){
    $amount=$_POST["amount"];
    $paymentID = $_POST["payment_id"];

    $payment = new editpaymentamount($amount, $paymentID);
    $payment->edit();

}
