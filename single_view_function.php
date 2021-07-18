<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <title>View Function</title>
</head>

<body style="background-color:lightskyblue;">

<?php 
include 'dbconn.php';
$function_id=$_GET['function_id'];


$sql="select * from `function` where `function_slno`='$function_id'";
$result=mysqli_query($conn,$sql);
while($row=mysqli_fetch_assoc($result)){

echo ' <div class="container">

<img src="Function/'. $row['function_poster'].'" height="400" class="d-block w-100" alt="...">
<div class="card-body" style="background-color: white;">
    <hr>
    <h4 class="text-center mt-3">
        <b><i>'. $row['function_name'].'</i></b>
    </h4>
    <div class="d-flex justify-content-between mt-4">

        <h6><i><b>Date Of Function Start : '. $row['date_of_function'].'</b></i></h6>
        <h6><i><b>Date Of Function End : '. $row['date_of_function_end'].'</b></i></h6>
    </div>
    <p class="mt-5"><i><b>'. $row['function_desp'].'</i></b</p>


        <h6 class="mt-5"><i><b><span style="color:blue">Regard That The Society Member Have To Pay '. $row['function_money'].' For That Puja To Become Success Full.</span></b></i> </h6>
<h4 class="text-center mt-5"><i><b> Thank You</b></i></h4>
<div class="d-flex justify-content-between mt-4">
<h6 style="color: green;"><i><b>Rahul Jha</b></i></h6>
<h6 style="color: green;"><i><b>Rahul Jha</b></i></h6>
</div>

<div class="d-flex justify-content-between">
<h5><i><b>President</b></i></h5>
<h5><i><b>Secretry</b></i></h5>
</div>
    <hr>
</div>
 </div>';




}




?>


   
            <!-- Optional JavaScript -->
            <!-- jQuery first, then Popper.js, then Bootstrap JS -->
            <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
                integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
                crossorigin="anonymous"></script>
            <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
                integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
                crossorigin="anonymous"></script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
                integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV"
                crossorigin="anonymous"></script>
</body>

</html>