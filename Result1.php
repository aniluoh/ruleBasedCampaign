<?php
$con = mysqli_connect("localhost","root","","campaign_management");

if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  exit();
} 


$sql1 = "SELECT c.campaign,metric,sum(value) from add_rule as a,campaign_data as c WHERE c.campaign = a.campaign and STATUS = \"Activated\" and action = \"Notify\" and metric = \"Impressions\" GROUP BY metric,campaign";
$sql2 = "SELECT campaign,conditions from add_rule WHERE  STATUS = \"Activated\" and action = \"Notify\" " ;
$result1 = mysqli_query($con, $sql1);
$result2 = mysqli_query($con, $sql2);

$row1 = mysqli_fetch_assoc($result1);
$row2 = mysqli_fetch_assoc($result2);
// $condition =  explode("AND",$row["conditions"]);
// $cond1  = explode(">=",$condition[0]);
// $cond2  = explode(">=",$condition[1]);

$conditions =  explode("AND",$row2["conditions"]);

$cond1 = explode(">=",$conditions[0]);
$cond2 = explode(">=",$conditions[1]);
var_dump($cond1);
echo "<br>";
var_dump($cond2);
echo "<br>";
var_dump($row1);


// Fetch all
// Free result set
mysqli_free_result($result1);

mysqli_close($con);
?>