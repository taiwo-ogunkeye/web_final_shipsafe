<?php

include "../classes/edit.transport.control.class.php";

////if the submit button is clicked it changes the transport destination

if(isset($_POST['update'])){
    $destination=$_POST["destination"];
    $transportID = $_POST["transport_id"];

    $transport = new edittransportdestination($destination, $transportID);
    $transport->edit();

}

?>