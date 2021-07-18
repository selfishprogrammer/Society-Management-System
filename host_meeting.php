<?php 

include 'dbconn.php';

session_start();
if(!isset($_SESSION['loggedin']) && $_SESSION['user']=="admin"){

echo '
<div class="alert alert-danger" role="alert">
Login First
</div>';

}
else if(isset($_SESSION['loggedin']) && $_SESSION['user']==null){


    echo '
    <div class="alert alert-danger" role="alert">
    You are not an Admin
    </div>';

}
else if(!isset($_SESSION['loggedin']) && $_SESSION['user']==null){


    echo '
    <div class="alert alert-danger" role="alert">
    Login First
    </div>';
    
    }

    else{

    

?>




<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <title>Host Meething</title>
</head>

<body style="background-color:mediumspringgreen;">

    <div class="container">

        <div class="card my-4">
<?php

if($_SERVER['REQUEST_METHOD']=='POST'){
    $meeting=$_POST['meeting'];
$meeting_link=$_POST['meeting_link'];
$date_of_meeting=$_POST['date_of_meeting'];
$time_of_meeting=$_POST['time_of_meeting'];
$sql="insert into `host_meeting` (`meeting`,`meeting_link`,`date_of_meeting`,`time_of_meeting`) values('$meeting','$meeting_link','$date_of_meeting','$time_of_meeting')";
$result=mysqli_query($conn,$sql);
if($result){
    echo '<div class="alert alert-success" role="alert">
    Meeting Added Successfully.
    </div>';
      }
      else{
        echo '<div class="alert alert-danger" role="alert">
       Something Went Wrong.
      </div>';
      }
}




?>

            <div class="card-header text-center" style="background-color: cyan;">
                <h4> <i><b>Host Meething</b></i></h4>
            </div>
            <div class="card-body">
            <form action="<?php echo $_SERVER['REQUEST_URI'] ?>" method="post">


<div class="form-group">

    <input type="text" name="meeting" placeholder="Meeting Tittle" class="form-control" id="">

</div>
<div class="form-group">
    <input type="text" name="meeting_link" id="" placeholder="Meeting Link"
        class="form-control">
</div>
<div class="form-group">
    <input type="date" name="date_of_meeting" id="" placeholder="Meeting Date"
        class="form-control">
</div>
<div class="form-group">
    <input type="time" name="time_of_meeting" id="" placeholder="Meeting Date"
        class="form-control">
</div>
<div class="form-group">
                        <button type="submit" class="btn btn-outline-success form-control">Host Meeting</button>

                    </div>
</form>
</div>
<div class="card-footer" style="background-color: cyan;">

</div>

</div>



</div>






<?php }?>
