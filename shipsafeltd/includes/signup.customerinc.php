<?php

include "../classes/signup.customer.control.class.php";

//if the submit button is clicked it creates a new customer
if(isset($_POST['submit'])){
    $fname = $_POST["fname"];
    $lname = $_POST["lname"];
    $email = $_POST["email"];
    $password = $_POST["password"];

    $customer = new customercontrol($fname, $lname, $email, $password);
    $customer->signup();

}

?>