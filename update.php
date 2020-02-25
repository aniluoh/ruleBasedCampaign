<?php
	$con = mysqli_connect('127.0.0.1','root','');
	if(!$con){
		echo "Not Connected to server";
	}
	if(!mysqli_select_db($con,'Campaign_Management')){
		echo "Database not sselected";
	}
	//echo "<pre>";print_r($_POST);die;
	$rulename = $_POST['RuleName'];
	$campaigns = $_POST['Campaigns'];
	$schedule = $_POST['Schedule'];
	$condition = $_POST['Conditions'];
	$action = $_POST['Action'];
	$status = $_POST['Status'];
	$id = $_POST['rule_id'];
	//echo "<pre>";print_r($_POST);die;
// mysqli_close($conn);
	// echo "INSERT INTO AddRule(RuleName,Campaign,Schedule,Condition,Action,Status) VALUES ('$rulename','$campaigns','$schedule','$condition','$action','$status')";exit;

	$sql = "UPDATE `add_rule` SET rule_name='$rulename',campaign='$campaigns',schedule='$schedule',action='$action',status='$status',conditions='$condition' WHERE id='$id'";


	if(mysqli_query($con,$sql)){
		echo "Inserted";
		header("Location: add.php");
	}
	else{
		echo "Not  Successful ";
	}
	header("refresh:5;url=add.php");
?>