<?php

include "../classes/signup.clerk.control.class.php";

//if the submit button is clicked it creates a new clerk

if(isset($_POST['submit'])){
    $fname = $_POST["fname"];
    $lname = $_POST["lname"];
    $email = $_POST["email"];
    $password = $_POST["password"];

    $clerk = new clerkcontrol($fname, $lname, $email, $password);
    $clerk->signup();

}

?>