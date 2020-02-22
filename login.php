<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Login Page</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	</head>
	<body>
		<div class="container" style="margin-top:50px;">
		<form action="LoginValidation.php" method="post">
			<div class="row">
				<div class="col-sm-4">
				</div>
				<div class="col-sm-4 text-center" style="padding:10px; border:1px solid red;">
					<label for="username">Username :</label>
					<input type="text" id="username" name="email" placeholder="Enter Email" required=""><br><br>
					<label for="password"> Password :</label>
					<input type="password" id="password" name="password" placeholder="Enter Password" required="">
					<br /><br />	
					<button type="submit" name="btn" class="btn btn-primary">Login</button>
				</div>
					<div class="col-sm-4">
					</div>
				</div>
		</form>
		</div> 
		<br />		
	</body>
</html>

