<!DOCTYPE>
<html>

		<head>
			<meta charset="UTF-8">
			<meta http-equiv="X-UA-Compatible" content="IE-edge">
			<meta name="viewport" content="width=device-width" initial-scale="1.0">
			<title>Login Admin</title>

			<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" 
			rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
			 crossorigin="anonymous">

		</head>


<body style="background-color:#ff8c52">
	<form action="../includes/login.clerkinc.php" method= "POST">
		<div class="mb-3">
		<label for="exampleInputEmail1" class="form-label">Email address</label>
		<input type="text" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
		<div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
		</div>
		<div class="mb-3">
		<label for="exampleInputPassword1" class="form-label">Password</label>
		<input type="password" name="password" value="password" class="form-control" id="exampleInputPassword1">
		</div>
		<button type="submit" name="submit" class="btn btn-primary">Login</button>
	</form>
<body>

</html>