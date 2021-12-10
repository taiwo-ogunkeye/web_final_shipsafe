
<!DOCTYPE>
<html>

		<head>
			<meta charset="UTF-8">
			<meta http-equiv="X-UA-Compatible" content="IE-edge">
			<meta name="viewport" content="width=device-width" initial-scale="1.0">
			<title>Create Good</title>

			<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" 
			rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
			 crossorigin="anonymous">

		</head>

<body style="background-color:#ff8c52">
	<form action="../includes/createpayment.inc.php" method= "POST">
		<div class="mb-3">
		<label for="exampleInputPassword1" class="form-label">Amount</label>
		<input type="number" name= "amount" class="form-control" id="exampleInputPassword1">
		</div>
		<div class="mb-3">
		<label for="exampleInputPassword1" class="form-label">Customer ID</label>
		<input type="number" name= "customer_id" class="form-control" id="exampleInputPassword1">
		</div>
		<div class="mb-3">
		<label for="exampleInputEmail1" class="form-label">Clerk ID</label>
		<input type="number" name="clerk_id" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
		</div>
		<button type="submit" name="submit" class="btn btn-primary">Create</button>
	</form>
</body>
</html>
