<?php
require ("dbconnect.php");

class clerklogin extends Database{
    private $database; //varaiable that connects to database 
    
    function __construct (){
        $database = new Database();
        $this->database= $database;

    }
//function that helps the staff login
    function loginclerk($email, $password){
            $connect = $this->database->connect();
            $validate= $connect->prepare('SELECT email, password FROM customer where email= ?;');
            
            if(!$validate->execute(array($email))){
                return false;
                exit();
            }
            if($validate->rowcount()==0){
                $answer= false;
                echo "you don't have an account";
            }
           $data= $validate->fetchAll(PDO::FETCH_ASSOC);
           echo '<pre>';
           var_dump($data[0]['password']);
           echo '<pre>';

           $valuepas= $data[0]["password"];

           if($password==$valuepas){
               return true;
           }else{
               echo "wrong password";
               return false;
           }
    }
    
            

}

?>