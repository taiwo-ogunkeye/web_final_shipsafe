<?php

include "../classes/create.transport.control.class.php";
//if the submit button is clicked it adds the transport information to the database

if(isset($_POST['submit'])){
    $goodID=$_POST["good_id"];
    $destination = $_POST["destination"];

    $transport =new transportcontrol($goodID, $destination);
    $transport->addTransport();

}

?>