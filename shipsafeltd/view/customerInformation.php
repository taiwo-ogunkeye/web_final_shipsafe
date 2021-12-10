<?php
require("../classes/dbconnect.php");

class displayCustomerInformation extends Database{

    private $data; //varaiable that connects to database 
    public $email;
    public $customerID;
    
    function __construct (){
        $data = new Database();
        $this->data= $data;

    }
    function displayuserinformation($email){
        $connect = $this->data->connect(); // this creates a variable connect that connects to the database

        $display= $connect->prepare('SELECT fname, lname FROM customer WHERE email=(?);');

        $displaycustomer= array($email);

        $display->execute($displaycustomer);
		$display= $display->fetch(PDO::FETCH_ASSOC);
        $displayVarFname= $display["fname"];
        $displayVarLname= $display["lname"];
        echo $displayVarFname;
        echo $displayVarLname;
    }

    function displaygoodinformation($customerID){
        $connect = $this->data->connect(); // this creates a variable connect that connects to the database

        $display= $connect->prepare('SELECT good_id, weight FROM good WHERE customer_id=(?);');

        $displaycustomer= array($customerID);

        $display->execute($displaycustomer);
		$display= $display->fetchAll(PDO::FETCH_ASSOC);
        foreach($display as $i=> $item){
        echo $item['good_id'] ; 
    }
        foreach($display as $i=> $item){
            echo $item['weight'] ;
        }
    }   
}
?>

<!DOCTYPE>
<html>

		<head>
			<meta charset="UTF-8">
			<meta http-equiv="X-UA-Compatible" content="IE-edge">
			<meta name="viewport" content="width=device-width" initial-scale="1.0">
			<title>Sign up</title>

			<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" 
			rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
			 crossorigin="anonymous">

		</head>

<body style="background-color:#ff8c52">
	<form action="../view/customerInformation.php" method= "POST">
		<div class="mb-3">
		<label for="exampleInputPassword1" class="form-label">ID</label>
		<input type="text" name= "customer_id" class="form-control" id="exampleInputPassword1">
		</div>
		<div class="mb-3">
		<label for="exampleInputEmail1" class="form-label">Email address</label>
		<input type="text" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
		<div id="emailHelp" class="form-text"style="color: white">We'll never share your email with anyone else.</div>
		</div>
		<button type="submit" name="submit" class="btn btn-primary">Show</button>
	</form>
</body>
</html>

<?php
if(isset($_POST['submit'])){
    $email=$_POST["email"];
    $customerID = $_POST["customer_id"];
    $showInfo = new displayCustomerInformation();
    $showInfo->displayuserinformation($email);
    $showInfo->displaygoodinformation($customerID);

}

?>
