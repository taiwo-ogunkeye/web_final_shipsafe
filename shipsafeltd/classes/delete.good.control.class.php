<?php

include("delete.good.class.php");

//control class for the delete function

class deletegoodcontrol extends deletegoodclass{
    private $goodID;
    public $goodObj;

    function __construct($goodID){
        $this->goodID= $goodID;
        
        $goodObj = new deletegoodclass();
        $this->goodObj = $goodObj;
    
    }

    

    function emptyInput(){
        if(empty($this->goodObj->deletegood($this->goodID))){
    
            return false;
        }
        else{
            return true;
        }
    }
//function that finally deletes the good
    function delete(){
        if($this->emptyInput() == false){
            exit();
        }
        $this->goodObj->deletegood($this->goodID);
    }

}

?>