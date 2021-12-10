<?php

include "../classes/login.clerk.control.class.php";
//if the submit button is clicked it logs in the clerk and takes them to the admin functions page

if(isset($_POST['submit'])){
    $email = $_POST["email"];
    $password = $_POST["password"];
    
    $clerk = new clerklogincontrol($email, $password);
    $clerk->login();
    header("Location: ../view/adminFunctions.php");
    
}

?>