<?php

include("edit.good.class.php");

//function that edits good weight 
class editgoodweight extends editgood{
    private $weight;
    private $goodID;
    public $editGoodObj;

    function __construct($weight, $goodID){
        $this->weight = $weight;
        $this->goodID = $goodID;

        $editGoodObj = new editgood();
        $this->editGoodObj = $editGoodObj;
    }


    
    function emptyInput(){
        if(empty($this->weight)|| empty($this->goodID)){
            echo "you haven't sunmitted anything";
            return false;
        }
        else{
            return true;
        }
    }
//function that edits the code
    function edit(){
        if($this->emptyInput() == false){
            exit();
        }
        $this->editGoodObj->editgood($this->weight,$this->goodID);
        echo "edit successful";
    }

}



?>