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

    <title>Add Job</title>
</head>

<body style="background-color:mediumspringgreen;">

    <div class="container">

        <div class="card my-4">
            <div class="card-header text-center" style="background-color: cyan;">
                <h4> <i><b>Add Job</b></i></h4>
            </div>
            <div class="card-body">



                <?php 
            $job_id=$_GET['job_id'];
if($_SERVER['REQUEST_METHOD']=='POST'){
  $job_title=$_POST['job_title'];
  $job_desp=$_POST['job_desp'];
  $age_range=$_POST['age_range'];
  $experience=$_POST['experience'];
  $education=$_POST['education'];
  $join_time=$_POST['join_time'];
  $leave_time=$_POST['leave_time'];
  $salary=$_POST['salary'];

  $sql1="update `jobs` set `job_title`='$job_title',`job_desp`='$job_desp',`age_range`='$age_range',`experience`='$experience',`education`='$education',`join_time`='$join_time',`leave_time`='$leave_time',`salary`='$salary' where `slno`='$job_id'";
  $result1=mysqli_query($conn,$sql1);
  if($result1){
echo '<div class="alert alert-success" role="alert">
Job is Updated Successfully.
</div>';
  }
  else{
    echo '<div class="alert alert-danger" role="alert">
   Something Went Wrong.
  </div>';
  }
  
}
?>






                <?php 



$sql="select * from `jobs` where `slno` ='$job_id'";
$result=mysqli_query($conn,$sql);
while($row=mysqli_fetch_assoc($result)){
  





?>



                <form action="<?php echo $_SERVER['REQUEST_URI'] ?>" method="post">


                    <div class="form-group">

                        <input type="text" name="job_title" placeholder="Job Tittle"
                            value="<?php echo $row['job_title'] ?>" class="form-control" id="">

                    </div>
                    <div class="form-group">
                        <textarea name="job_desp" id="" value="<?php echo $row['job_desp'] ?>"
                            placeholder="Job Description" style="height: 140px;" class="form-control"></textarea>
                    </div>
                    <label for="job_title"> Job Eligiblity Criteria</label>
                    <div class="form-group">

                        <input type="text" name="age_range" value="<?php echo $row['age_range'] ?>"
                            placeholder="Age Range" class="form-control" id="">

                    </div>

                    <div class="form-group">

                        <input type="text" name="experience" value="<?php echo $row['experience'] ?>"
                            placeholder="Experience" class="form-control" id="">

                    </div>
                    <div class="form-group">

                        <input type="text" name="education" value="<?php echo $row['education'] ?>"
                            placeholder="Education" class="form-control" id="">

                    </div>
                    <label for="job_title"> Duty Time /Salary </label>
                    <div class="form-group">
                        <label for="">Join Time</label>
                        <input type="time" value="<?php echo $row['join_time'] ?>" name="join_time" class="form-control"
                            id="">

                    </div>

                    <div class="form-group">
                        <label for="">Leave Time</label>
                        <input type="time" value="<?php echo $row['leave_time'] ?>" name="leave_time"
                            class="form-control" id="">

                    </div>
                    <div class="form-group">
                        <input type="number" value="<?php echo $row['salary'] ?>" name="salary" placeholder="Salary"
                            class="form-control" id="">
                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-outline-success form-control">Update</button>

                    </div>
                </form>
                <?php }?>
            </div>
            <div class="card-footer" style="background-color: cyan;">

            </div>

        </div>



    </div>



    <?php }?>
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