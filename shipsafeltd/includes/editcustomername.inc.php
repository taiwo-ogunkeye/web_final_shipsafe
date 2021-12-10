<?php

include "../classes/edit.customer.name.control.php";

//if the submit button is clicked it changes the customer name

if(isset($_POST['update'])){
    $fname = $_POST["fname"];
    $lname = $_POST["lname"];
    $customerID = $_POST["customer_id"];
    
    
    $name = new editcustomername($fname, $lname, $customerID);
    $name->edit();

}

?>