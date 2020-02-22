<?php
	$con = mysqli_connect('127.0.0.1','root','');
	if(!$con){
		echo "Not Connected to server";
	}
	if(!mysqli_select_db($con,'Campaign_Management')){
		echo "Database not sselected";
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Add Rule</title>
  	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
	<body>
		<!-- Add Rule Form -->
		<div class="container">
			<div class="row">
				<form action="Addrule_Insert.php" method="post">
				<div class="col-sm-12"><br />
					<button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Add Rule</button>

					<!-- Modal -->
					<div id="myModal" class="modal fade" role="dialog">
					  <div class="modal-dialog">

					    <!-- Modal content-->
					    <div class="modal-content">
					      	<div class="modal-header">
					        	<button type="button" class="close" data-dismiss="modal">&times;</button>
					        	<h4 class="modal-title">Create new rule</h4>
					     	</div>
					      	<div class="modal-body">
					        	<form action="#">
									<div class="form-group">
								    	<label for="Rule">Rule Name:</label>
								    	<input type="text" class="form-control" id="email" name="RuleName" required="">
								  	</div>
								  	<div class="form-group">
									    <label for="compaign">Campaigns :</label>
									    <select class="form-control" id="sel1" name="Campaigns">
										    <option>Select Campaign</option>
										    <option>Swiggy</option>
										    <option>Netflix</option>
										    <option>Zomato</option>
										    <option>Amazon Prime</option>
										    <option>Paytm</option>
										</select>
								  	</div>
								  	<div class="form-group">
									    <label for="schedule ">Schedule  :</label>
									    <select class="form-control" id="sel1" name="Schedule">
									    	<option value="1">15 Minute</option>
										    <option value="2">1 Hour</option>
										    <option value="3">12:00 AM</option>
										</select>
									    <!-- <input type="text" class="form-control" id="email"> -->
								  	</div>
								  	<div class="form-group">
									    <label for="condition ">Condition :</label>
									    <input type="text" class="form-control" id="email" name="Condition" required="">
								  	</div>

									<div class="form-group">
									    <label for="compaign">Action :</label>
									    <select class="form-control" id="sel1" name="Action">
									    	<option value="1">Notify</option>
										    <option value="2">Paused Campaign</option>
										    <option value="3">Start Campaign</option>
										</select>
								  	</div>
								  	<div class="form-group">
									    <label for="compaign">Status :</label>
									    <select class="form-control" id="sel1" name="Status">
										    <option value="True">Activated</option>
										    <option value="False">Deactivated</option>
										</select>
								  	</div>
								  <!-- <div class="form-group">
								  	<label for="condition ">Condition :</label>
								  	<input type="text" class="form-group" id="email">
								  </div> -->

								  	<button type="submit" class="btn btn-default">Submit</button>
								</form>
					     		</div>
					    	</div>
						</div>
					</div>

					<div id="myModal" class="modal fade" role="dialog">
					  <div class="modal-dialog">

					    <!-- Modal content-->
					    <div class="modal-content">
					      	<div class="modal-header">
					        	<button type="button" class="close" data-dismiss="modal">&times;</button>
					        	<h4 class="modal-title">Create new rule</h4>
					     	</div>
					      	<div class="modal-body">
					        	<form action="#">
									<div class="form-group">
								    	<label for="Rule">Rule Name:</label>
								    	<input type="text" class="form-control" id="email" name="RuleName" required="">
								  	</div>
								  	<div class="form-group">
									    <label for="compaign">Campaigns :</label>
									    <select class="form-control" id="sel1" name="Campaigns">
										    <option>Select Campaign</option>
										    <option>Swiggy</option>
										    <option>Netflix</option>
										    <option>Zomato</option>
										    <option>Amazon Prime</option>
										    <option>Paytm</option>
										</select>
								  	</div>
								  	<div class="form-group">
									    <label for="schedule ">Schedule  :</label>
									    <select class="form-control" id="sel1" name="Schedule">
									    	<option value="1">15 Minute</option>
										    <option value="2">1 Hour</option>
										    <option value="3">12:00 AM</option>
										</select>
									    <!-- <input type="text" class="form-control" id="email"> -->
								  	</div>
								  	<div class="form-group">
									    <label for="condition ">Condition :</label>
									    <input type="text" class="form-control" id="email" name="Condition">
								  	</div>

									<div class="form-group">
									    <label for="compaign">Action :</label>
									    <select class="form-control" id="sel1" name="Action">
									    	<option value="1">Notify</option>
										    <option value="2">Paused Campaign</option>
										    <option value="3">Start Campaign</option>
										</select>
								  	</div>
								  	<div class="form-group">
									    <label for="compaign">Status :</label>
									    <select class="form-control" id="sel1" name="Status">
										    <option value="True">Activated</option>
										    <option value="False">Deactivated</option>
										</select>
								  	</div>
								  <!-- <div class="form-group">
								  	<label for="condition ">Condition :</label>
								  	<input type="text" class="form-group" id="email">
								  </div> -->

								  	<button type="submit" class="btn btn-default">Submit</button>
								</form>
					     		</div>
					    	</div>
						</div>
					</div>
		 
				</div>
				</form>

<!--Beginning of  Edit Form -->

			<form action="Addrule_Insert.php" method="post">
				<div class="col-sm-12"><br />		

					<!-- Modal -->
					<div id="myModal2" class="modal fade" role="dialog">
					  <div class="modal-dialog">

					    <!-- Modal content-->
					    <div class="modal-content">
					      	<div class="modal-header">
					        	<button type="button" class="close" data-dismiss="modal">&times;</button>
					        	<h4 class="modal-title">Edit Rule</h4>
					     	</div>
					      	<div class="modal-body">
					        	<form action="#">
									<div class="form-group">
								    	<label for="Rule">Rule Name:</label>
								    	<input type="text" class="form-control" id="email" name="RuleName" required="">
								  	</div>
								  	<div class="form-group">
									    <label for="compaign">Campaigns :</label>
									    <select class="form-control" id="sel1" name="Campaigns">
										    <option>Select Campaign</option>
										    <option>Swiggy</option>
										    <option>Netflix</option>
										    <option>Zomato</option>
										    <option>Amazon Prime</option>
										    <option>Paytm</option>
										</select>
								  	</div>
								  	<div class="form-group">
									    <label for="schedule ">Schedule  :</label>
									    <select class="form-control" id="sel1" name="Schedule">
									    	<option value="1">15 Minute</option>
										    <option value="2">1 Hour</option>
										    <option value="3">12:00 AM</option>
										</select>
									    <!-- <input type="text" class="form-control" id="email"> -->
								  	</div>
								  	<div class="form-group">
									    <label for="condition ">Condition :</label>
									    <input type="text" class="form-control" id="email" name="Condition">
								  	</div>

									<div class="form-group">
									    <label for="compaign">Action :</label>
									    <select class="form-control" id="sel1" name="Action">
									    	<option value="1">Notify</option>
										    <option value="2">Paused Campaign</option>
										    <option value="3">Start Campaign</option>
										</select>
								  	</div>
								  	<div class="form-group">
									    <label for="compaign">Status :</label>
									    <select class="form-control" id="sel1" name="Status">
										    <option value="True">Activated</option>
										    <option value="False">Deactivated</option>
										</select>
								  	</div>
								  <!-- <div class="form-group">
								  	<label for="condition ">Condition :</label>
								  	<input type="text" class="form-group" id="email">
								  </div> -->

								  	<button type="submit" class="btn btn-default">Submit</button>
								</form>
					     		</div>
					    	</div>
						</div>
					</div>

					<div id="myModal" class="modal fade" role="dialog">
					  <div class="modal-dialog">

					    <!-- Modal content-->
					    <div class="modal-content">
					      	<div class="modal-header">
					        	<button type="button" class="close" data-dismiss="modal">&times;</button>
					        	<h4 class="modal-title">Create new rule</h4>
					     	</div>
					      	<div class="modal-body">
					        	<form action="#">
									<div class="form-group">
								    	<label for="Rule">Rule Name:</label>
								    	<input type="text" class="form-control" id="email" name="RuleName" required="">
								  	</div>
								  	<div class="form-group">
									    <label for="compaign">Campaigns :</label>
									    <select class="form-control" id="sel1" name="Campaigns">
										    <option>Select Campaign</option>
										    <option>Swiggy</option>
										    <option>Netflix</option>
										    <option>Zomato</option>
										    <option>Amazon Prime</option>
										    <option>Paytm</option>
										</select>
								  	</div>
								  	<div class="form-group">
									    <label for="schedule ">Schedule  :</label>
									    <select class="form-control" id="sel1" name="Schedule">
									    	<option value="1">15 Minute</option>
										    <option value="2">1 Hour</option>
										    <option value="3">12:00 AM</option>
										</select>
									    <!-- <input type="text" class="form-control" id="email"> -->
								  	</div>
								  	<div class="form-group">
									    <label for="condition ">Condition :</label>
									    <input type="text" class="form-control" id="email" name="Condition">
								  	</div>

									<div class="form-group">
									    <label for="compaign">Action :</label>
									    <select class="form-control" id="sel1" name="Action">
									    	<option value="1">Notify</option>
										    <option value="2">Paused Campaign</option>
										    <option value="3">Start Campaign</option>
										</select>
								  	</div>
								  	<div class="form-group">
									    <label for="compaign">Status :</label>
									    <select class="form-control" id="sel1" name="Status">
										    <option value="True">Activated</option>
										    <option value="False">Deactivated</option>
										</select>
								  	</div>
								  <!-- <div class="form-group">
								  	<label for="condition ">Condition :</label>
								  	<input type="text" class="form-group" id="email">
								  </div> -->

								  	<button type="submit" class="btn btn-default">Submit</button>
								</form>
					     		</div>
					    	</div>
						</div>
					</div>
		 
				</div>
				</form>

<!-- Edit form End -->

				<br />
				<br />
				<h2>Campaign List</h2>

<?php

		   $sql = "select * from add_rule";
			$result = mysqli_query($con, $sql);
			//$row = mysqli_fetch_assoc($result);
			//$row=mysqli_fetch_array($con,$result);
			//echo "<pre>";print_r($row);die;
			
				//echo "<pre>";print_r($data);
			//echo $data['rule_name'];
?>

			  	<table class="table table-bordered">
				    <thead>
				      <tr>
				        <th>Rule Name</th>
				        <th>Campaigns</th>
				        <th>Rule Schedule</th>
				        <th>Rule Status</th>
				        <th>action</th>
				      </tr>
				    </thead>
				    <tbody>
				    <?php	foreach($result as $key=>$data) { ?>
				      <tr>
				        <td><?php echo $data['rule_name'];?></td>
				        <td><?php echo $data['campaign'];?></td>
				        <td><?php echo $data['rule_name'];?></td>
				        <td><?php echo $data['rule_name'];?></td>
				        <td>
				        	<div class="btn-default">
				        	<!-- 	<button type="button" class="btn btn-primary">Edit</button> -->
				        	<button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal2">Edit</button>
				        	</div>
				        </td>
				      </tr>
				      	  	<?php
			  }
?>
				    </tbody>
			  	</table>

		
			</div>
		</div>


	</body>
</html>
<!-- Dynamic Table Reference -->
<!-- https://bootsnipp.com/snippets/VVyP -->