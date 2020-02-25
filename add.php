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
										</select>
								  	</div>
								  	<div class="form-group">
									    <label for="schedule ">Schedule  :</label>
									    <select class="form-control" id="sel1" name="Schedule">
									    	<option>15 Minute</option>
										    <option>1 Hour</option>
										    <option>12:00 AM</option>
										</select>
								  	</div>
								  	<div class="form-group">
									    <label for="condition ">Condition :</label>
									    <input type="text" class="form-control" id="email" name="Conditions">
								  	</div>

									<div class="form-group">
									    <label for="compaign">Action :</label>
									    <select class="form-control" id="sel1" name="Action">
									    	<option>Notify</option>
										    <option>Paused Campaign</option>
										    <option>Start Campaign</option>
										</select>
								  	</div>
								  	<div class="form-group">
									    <label for="compaign">Status :</label>
									    <select class="form-control" id="sel1" name="Status">
										    <option>Activated</option>
										    <option >Deactivated</option>
										</select>
								  	</div>
								  	<button type="submit" class="btn btn-default">Submit</button>
								</form>
					     		</div>
					    	</div>
						</div>
					</div>
				</div>
				</form>
				<br />
				<br />
				<h2>Campaign List</h2>
<?php
		   $sql = "select * from add_rule";
			$result = mysqli_query($con, $sql);
?>
			  	<table class="table table-bordered">
				    <thead>
				      <tr>
				        <th>Rule Name</th>
				        <th>Campaigns</th>
				        <th>Rule Schedule</th>
				        <th>Rule Status</th>
				        <th></th>
				      </tr>
				    </thead>
				    <tbody>
				    <?php	foreach($result as $key=>$data) { ?>
				      <tr>
				        <td><?php echo $data['rule_name'];?></td>
				        <td><?php echo $data['campaign'];?></td>
				        <td><?php echo $data['schedule'];?></td>
				        <td><?php echo $data['status'];?></td>
				        <td>
				        	<div class="btn-default">
				        	<button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal2<?php echo $data['id'];?>">Edit</button>
				        	</div>
				        </td>
				      </tr>
<!-- Edit Form start -->
			<form action="update.php" method="post">
				<div class="col-sm-12"><br />	
					<!-- Modal -->
					<div id="myModal2<?php echo $data['id'];?>" class="modal fade" role="dialog">
					  <div class="modal-dialog">
					    <!-- Modal content-->
					    <div class="modal-content">
					      	<div class="modal-header">
					        	<button type="button" class="close" data-dismiss="modal">&times;</button>
					        	<h4 class="modal-title">Edit Rule</h4>
					     	</div>
					      	<div class="modal-body">
					        	<form action="#">
					        		<?php $id = $data['id'];
 					        		 $sql = "select * from add_rule where id='$id'";
												$result = mysqli_query($con, $sql);
												$row=mysqli_fetch_array($result);
					        		?>
									<div class="form-group">
								    	<label for="Rule">Rule Name:</label>
								    	<input type="text" class="form-control" id="email" name="RuleName" value="<?php echo $row['rule_name'];?>"required="">
								  	</div>
								  	<input type="hidden" name="rule_id" value="<?php echo $data['id'];?>">
								  	<div class="form-group">
									    <label for="compaign">Campaigns :</label>
										<select id="camp" name="Campaigns">
										    <option>Select Campaign</option>
										    <option value="Swiggy" <?php echo ($row['campaign'] == 'Swiggy')?'selected':''?>>Swiggy</option>
										    <option value="Netflix" <?php echo ($row['campaign'] == 'Netflix')?'selected':''?>>Netflix</option>
										    <option value="Zomato" <?php echo ($row['campaign'] == 'Zomato')?'selected':''?>>Zomato</option>
										    <option value="Amazon Prime" <?php echo ($row['campaign'] == 'Amazon Prime')?'selected':''?>>Amazon Prime</option>
										</select>
								  	</div>
								  	<div class="form-group">
									    <label for="schedule ">Schedule  :</label>
										<select id="sche" name="Schedule">
										    <option value="15 Minute" <?php echo ($row['schedule'] == '15 Minute')?'selected':''?>>15 Minute</option>
										    <option value="1 Hour" <?php echo ($row['schedule'] == '1 Hour')?'selected':''?>>1 Hour</option>
										    <option value="12:00 AM" <?php echo ($row['schedule'] == '12:00 AM')?'selected':''?>>12:00 AM</option>
										</select>
								  	</div>
								  	<div class="form-group">
									    <label for="condition ">Condition :</label>
									    <input type="text" class="form-control" id="email" name="Conditions" value="<?php echo $row['conditions'];?>">
								  	</div>
									<div class="form-group">
									    <label for="compaign">Action :</label>
										<select id="sell" name="Action">
										    <option value="Notify" <?php echo ($row['action'] == 'Notify')?'selected':''?>>Notify</option>
										    <option value="Start Campaign" <?php echo ($row['action'] == 'Start Campaign')?'selected':''?>>Start Campaign</option>
										    <option value="Paused Campaign" <?php echo ($row['action'] == 'Paused Campaign')?'selected':''?>>Paused Campaign</option>
										</select>
								  	</div>
								  	<div class="form-group">
									    <label for="compaign">Status :</label>
										<select id="sell" name="Status">
										    <option value="Activated" <?php echo ($row['status'] == 'Activated')?'selected':''?>>Activated</option>
										    <option value="Deactivated" <?php echo ($row['status'] == 'Deactivated')?'selected':''?>>Deactivated</option>
										</select>
								  	</div>
								  	<button type="submit" class="btn btn-default">Submit</button>
								</form>
					     		</div>
					    	</div>
						</div>
					</div>
				</div>
				</form>

<!-- Edit form End -->
				      	  	<?php
			  }
?>
				    </tbody>
			  	</table>
			</div>
		</div>
	</body>
</html>