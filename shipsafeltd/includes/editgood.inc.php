<?php

include "../classes/edit.good.control.class.php";

//if the submit button is clicked it changes the good weight

if(isset($_POST['update'])){
    $weight=$_POST["weight"];
    $goodID = $_POST["good_id"];

    $good = new editgoodweight($weight, $goodID);
    $good->edit();

}

?>