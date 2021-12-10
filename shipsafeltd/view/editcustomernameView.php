


<!DOCTYPE>
<html>

	<head>
			<meta charset="UTF-8">
			<meta http-equiv="X-UA-Compatible" content="IE-edge">
			<meta name="viewport" content="width=device-width" initial-scale="1.0">
			<title>Edit Customer Name</title>

			<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" 
			rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
			 crossorigin="anonymous">

		</head>

<body style="background-color:#ff8c52">
	<form action="../includes/editcustomername.inc.php" method= "POST">
		<div class="mb-3">
		<label for="exampleInputEmail1" class="form-label">Firstname</label>
		<input type="text" name="fname" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
		</div>
		<div class="mb-3">
		<label for="exampleInputPassword1" class="form-label">Lastname</label>
		<input type="text" name="lname" class="form-control" id="exampleInputPassword1">
		</div>
		<div class="mb-3">
		<label for="exampleInputEmail1" class="form-label">Customer ID</label>
		<input type="text" name="customer_id" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
		</div>
		<button type="submit" name="update" class="btn btn-primary">Update</button>
	</form>

</body>
</html>