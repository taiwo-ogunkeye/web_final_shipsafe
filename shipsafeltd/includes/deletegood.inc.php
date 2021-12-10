<?php

include "../classes/delete.good.control.class.php";

//if the submit button is clicked it removes the good from the database

if(isset($_POST['submit'])){
    $goodID = $_POST["good_id"];
  
    $good = new deletegoodcontrol($goodID);
    $good->delete();

}

?>