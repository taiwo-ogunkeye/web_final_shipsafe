<?php

include "../classes/create.payment.control.class.php";

//if the submit button is clicked it adds the payment information to the database

if(isset($_POST['submit'])){
    $amount=$_POST["amount"];
    $customerID = $_POST["customer_id"];
    $clerkID = $_POST["clerk_id"];

    $payment = new paymentcontrol($amount, $customerID, $clerkID);
    $payment->addPayment();

}

?>