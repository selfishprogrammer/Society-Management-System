<?php 

include 'dbconn.php';
$job_id=$_GET['job_id'];
$sql="DELETE FROM `jobs` WHERE `slno`='$job_id'";
$result=mysqli_query($conn,$sql);
header("location:viewjob_admin.php");
?>