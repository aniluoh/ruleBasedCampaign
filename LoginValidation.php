<?php
	
	$con = mysqli_connect('127.0.0.1','root','');
	if(!$con){
		echo "Not Connected to server";
	}
	if(!mysqli_select_db($con,'Campaign_Management')){
		echo "Database not sselected";
	}

	$username = $_POST['email'];
	$password = $_POST['password'];
	if(isset($_POST['btn'])){
		if(!empty($username) && !empty($password)){

			// $sql=($con,"select * from User where Email='$username' and Password='$password'");
			// $rn=mysqli_execute($sql);

			$sql = "select * from User where Email='$username' and Password='$password'";
			$result = mysqli_query($con, $sql);

			$row=mysqli_fetch_array($result);
			if($row){
				echo "User Login Succes.!";			
				header("Location: add.php");
			}else{
				echo "User Id or Password Not correct..!";
				header("Location: login.php");
			}

		}
		else{
			echo "Fill email!!";
		}
	}

?>