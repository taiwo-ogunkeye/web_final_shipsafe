<?php

include "../classes/create.good.control.class.php";

//if the submit button is clicked it adds the goods to the database

if(isset($_POST['submit'])){
    $weight=$_POST["weight"];
    $customerID = $_POST["customer_id"];
    $clerkID = $_POST["clerk_id"];

    $good = new goodcontrol($weight, $customerID, $clerkID);
    $good->addGood();

}

?>