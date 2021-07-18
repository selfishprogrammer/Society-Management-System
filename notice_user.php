<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <title>Notice For Members</title>
  </head>
  <body style="background-color:#fff;">

  <div class="shadow-sm bg-white rounded" style="background-color: cyan;">
        <div class="card-footer" style="background-color:thistle;"></div>
        <div class="card-body" style="background-color: white;">
            <h5 class="text-center" style="font-style:italic;"><b><i>Notices For Members</i></b></h5>
        </div>
        <div class="card-footer" style="background-color: thistle;"></div>
    </div>






<?php 

include 'dbconn.php';
$sql="select * from `notice`";
$result=mysqli_query($conn,$sql);
while($row=mysqli_fetch_assoc($result)){
echo '  

<div class="container">
    <div class="shadow-sm my-4 bg-white rounded" style="background-color: cyan;">
        <div class="card-footer" style="background-color:thistle;"></div>
 <div class="card-footer">




<h5><i><b1> '.$row['notice_slno'].' . Notice for Society Member on a topic of  '.$row['notice_title'].'.</b></i></h5>
<div class="d-flex justify-content-between">
  <h6 class="my-3"><i><b>Date of Notice :'.$row['date_of_notice'].'</b></i></h6>  
  <a href="notice_view_user.php?notice_id_slno='.$row['notice_slno'].'"><button type="submit" class="btn btn-success">View Notice</button></a>
</div>


</div>
    
 

        <div class="card-footer" style="background-color: thistle;"></div>
    </div>
    </div>


';
}

?>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  </body>
</html>