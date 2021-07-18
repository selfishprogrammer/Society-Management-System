<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <title>New Notice</title>
</head>

<body style="background-color: black;">

    <div class="container">

        <div class="shadow-sm bg-white rounded" style="background-color: cyan;">
            <div class="card-footer" style="background-color:thistle;"></div>
            <div class="card-body" style="background-color: white;">
                <h5 class="text-center" style="font-style:italic;"><b><i>Notices For Members</i></b></h5>
            </div>
            <div class="card-footer" style="background-color: thistle;"></div>
        </div>
<?php 
include 'dbconn.php';

$notice_id_slno=$_GET['notice_id_slno'];
$sql="select * from `notice` where `notice_slno`='$notice_id_slno'"; 
$result=mysqli_query($conn,$sql);
while($row=mysqli_fetch_assoc($result)){
echo '<div class="shadow-sm bg-white rounded my-2" style="background-color: cyan;">
<div class="card-footer" style="background-color: black;"> </div>

<div class="card-body">

    <h4 class="text-center"><b><i>Notice For '.$row['notice_title'].'</i></b></h4>
    <div class="d-flex justify-content-between my-4">
    <h6 class="mx-3 "><b><i>Date : '.$row['date_of_notice'].'</i></b></h6>
    <h6 class="mx-3 "><b><i>Notice Number : '.$row['notice_slno'].'</i></b></h6>
</div>

    <h6 class="mx-4 my-4"><b><i>Dear Society Members ,</i></b></h6>
    <p class="mx-4 my-4"><b>'.$row['notice_desp'].'</b></p>


    <div class="d-flex justify-content-between mt-5">
        <img src="President/'.$row['precident_sign'].'" height="50" width="140" alt="">
        <img src="Secretry/'.$row['secretry_sign'].'" height="50" width="140" alt="">
    </div>
    <div class="d-flex justify-content-between">


        <h6 class="">President Signature</h6>
        <h6 class="">Secretry Signature</h6>
    </div>
</div>
<div class="card-footer" style="background-color: black;"> </div>

</div>';
}


?>

        
    </div>

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