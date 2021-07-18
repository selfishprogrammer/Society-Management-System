<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <title>Jobs</title>
</head>

<body>
    <div class="shadow-sm bg-white rounded" style="background-color: cyan;">
        <div class="card-footer" style="background-color:blue;"></div>
        <div class="card-body" style="background-color: white;">
            <h5 class="text-center" style="font-style:italic;"><b><i>Job For Users</i></b></h5>
        </div>
        <div class="card-footer" style="background-color: blue;"></div>
    </div>


    <div class="container">
        <?php 
include 'dbconn.php';
$sql="select * from `jobs`";
$result=mysqli_query($conn,$sql);
while($row=mysqli_fetch_assoc($result)){

echo '    <div class="shadow-sm my-4 bg-white rounded" style="background-color: cyan;">
<div class="card-footer" style="background-color:thistle;"></div>
<div class="card-header" style="background-color:ghostwhite;">
<h5 class="text-center">REQUIREMENT OF <span style="color: blue;">'.$row['job_title'].'</span></h5>
</div>
<div class="card-body">
<h6 class="mx-1 mt-4"><b><i>JOB NO : <span class="mx-4" style="color: blue;">'.$row['slno'].'</span></i></b></h6>
<h6 class="mx-1 mt-3"><b><i>JOB FOR : <span class="mx-4" style="color: blue;">'.strtoupper($row['job_title']).'</span></i></b></h6>
<h6 class="mx-1 mt-3"><b><i>JOB DESCRIPTION : <span class="mx-4" style="color: blue;">'.strtoupper($row['job_desp']).'</span></i></b></h6>
<h6 class="mx-1 mt-3"><b><i>AGE CRITERIA : <span class="mx-4" style="color: blue;">'.strtoupper($row['age_range']).'</span></i></b></h6>
<h6 class="mx-1 mt-3"><b><i>EXPERIENCE : <span class="mx-4" style="color: blue;">'.$row['experience'].'</span></i></b></h6>
<h6 class="mx-1 mt-3"><b><i>EDUCATION REQUIRED : <span class="mx-4" style="color: blue;">'.$row['education'].'</span></i></b></h6>
<h6 class="mx-1 mt-3"><b><i>WORK JOIN TIME  : <span class="mx-4" style="color: blue;">'.$row['join_time'].'</span></i></b></h6>
<h6 class="mx-1 mt-3"><b><i>WORK LEAVE TIME : <span class="mx-4" style="color: blue;">'.$row['leave_time'].'</span></i></b></h6>
<h6 class="mx-1 mt-3"><b><i>SALARY : <span class="mx-4" style="color: blue;">'.$row['salary'].'</span></i></b></h6>
<div class="d-flex justify-content-center mt-5">
<a href="job_apply.php?job_id='.$row['slno'].'"><button type="submit" class="btn btn btn-outline-info" style="width:18rem;">Apply</button></a>

</div>
</div>
<div class="card-footer" style="background-color:thistle;"></div>
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