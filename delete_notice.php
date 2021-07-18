<?php 

include 'dbconn.php';
$notice_id=$_GET['notice_id'];
$sql="DELETE FROM `notice` WHERE `notice_slno`='$notice_id'";
$result=mysqli_query($conn,$sql);
header("location:view_notice.php");
?>