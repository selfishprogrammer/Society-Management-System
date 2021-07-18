<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <title>Complain</title>
</head>

<body>

    <div class="container">

        <?php
include 'dbconn.php';
session_start();
if(isset($_SESSION['loggedin'])   &&  $_SESSION['loggedin']==true){


$user_slno=$_SESSION['slno'];

$sql="select * from `users` where `slno`='$user_slno'";
$result=mysqli_query($conn,$sql);
while($row=mysqli_fetch_assoc($result)){
$name=$row['name'];
$email=$row['email'];




?>

        <div class="card mt-5">

            <div class="card-footer" style="background-color: black;">
            </div>

            <div class="card-header" style="background-color: cyan;">
                <h5 class="text-center"><i><b>Register You Complain</b></i></h5>
            </div>

            <div class="card-body">
                <form action="<?php echo $_SERVER['REQUEST_URI'] ?>" method="POST">
                    <div class="form-group">

                        <input id="" class="form-control" type="text" value="<?php echo $row['building_no'] ?>"
                            name="building_no" placeholder="Building Number">
                    </div>

                    <div class="form-group">

                        <input id="" class="form-control" type="text" value="<?php echo $row['building_name'] ?>"
                            name="building_name" placeholder="Building Name">
                    </div>
                    <div class="form-group">

                        <input id="" class="form-control" type="text" value="<?php echo $name ?>" name="name"
                            placeholder="Applicant Name">
                    </div>

                    <div class="form-group">

                        <input id="" class="form-control" type="email" value="<?php echo $email ?>" name="email"
                            placeholder="Applicant Email">
                    </div>


                    <div class="form-group"><b>

                        <textarea id="" class="form-control" style="height: 300px;" name="complain"
                            placeholder="Write Your Complain"></textarea></b>
                    </div>

                    <div class="d-flex justify-content-center">
                        <button type="submit" class="btn btn-success mx-2">Complain</button>
                        <button type="reset" class="btn btn-danger mx-2">Cancel</button>
                    </div>
                </form>

            </div>

            <div class="card-footer" style="background-color: black;">
            </div>


        </div>

    </div>







    <?php }

} ?>


    <?php



if($_SERVER['REQUEST_METHOD'] =='POST'){

    $name=$_POST['name'];
    $email=$_POST['email'];
    $complain=$_POST['complain'];
    $building_name=$_POST['building_name'];
    $building_no=$_POST['building_no'];

    $sql="insert into `complain` (`name`,`email`,`complain`,`building_name`,`building_no`) values ('$name','$email','$complain','$building_name','$building_no')";
$result=mysqli_query($conn,$sql);
if($result){
echo 'Insert';
}
else{
    echo 'Failed';
}
}


?>

   
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
        integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous">
    </script>
</body>

</html>