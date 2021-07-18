<?php 

include 'dbconn.php';
$meeting_id=$_GET['meeting_id'];
$sql="DELETE FROM `host_meeting` WHERE `meeting_slno`='$meeting_id'";
$result=mysqli_query($conn,$sql);
header("location:view_host_meeting.php");
?>