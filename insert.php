<?php
	// echo "Shree ganeshay nahah";
	$con = mysqli_connect('127.0.0.1','root','');
	if(!$con){
		echo "Not Connected to server";
	}
	if(!mysqli_select_db($con,'Campaign_Management')){
		echo "Database not sselected";
	}
	$username = $_POST['email'];
	$email = $_POST['password'];
	$sql = "INSERT INTO User(Email,Password) VALUES ('$username','$email')";
	if(!mysqli_query($con,$sql)){
		echo "Not Inserted";
	}
	else{
		echo " Successful ";
	}
	header("refresh:2;url=login.php");
?>