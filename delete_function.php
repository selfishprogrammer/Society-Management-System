<?php 

include 'dbconn.php';
$function_id=$_GET['function_id'];
$sql="DELETE FROM `function` WHERE `function_slno`='$function_id'";
$result=mysqli_query($conn,$sql);
header("location:view_function.php");
?>