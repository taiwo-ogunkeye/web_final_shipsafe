<?php
/*
database connection
*/

class Database{
    public function connect(){
        try{
            $username= "root";
            $password = "";
            $dbname = "shipsafedbwt";
            $host="localhost";
            
            $dsn="mysql:host=$host;dbname=$dbname";
            $dbconnect= new PDO($dsn, $username, $password);
            $dbconnect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $dbconnect;
        }

        catch(PDOException $e){
            print "Error:" .$e->getMessage(). '<br/>';
            die();
        }
    }
}

$connect= new Database();
$connect->connect();
?>
