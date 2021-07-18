<?php
include 'dbconn.php';
session_start();
if(isset($_SESSION['loggedin']) && $_SESSION['loggedin'] ==true){






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

    <title>Job Apply</title>
</head>

<body>

    <div class="card-header" style="background-color:black;">
        <div class="d-flex justify-content-between">
            <a href="index.php"><button type="button" class="btn btn-success mx-2">Back to Home</button></a>
            <a href="job_user.php"><button type="button" class="btn btn-success mx-2">Back To Job</button></a>
        </div>
    </div>



    <div class="container">

        <div class="col-md-6 offset-md-3 mt-5">
            <div class="card" style="margin-top: 120px;">
                <div class="card-footer" style="background-color:black;"></div>
                <div class="card-header" style="background-color:cyan;">
                    <h4 class="text-center"><i><b>ADD YOUR INFORMATION</b></i></h4>
                </div>
                <?php
                if($_SERVER['REQUEST_METHOD']=='POST'){
                    $job_id=$_GET['job_id'];
            $name=$_POST['name'];
             $email=$_POST['email'];
                $phone=$_POST['phone'];
                   $experience=$_POST['experience'];
                $reseume=$_FILES['reseume']['name'];
                $reseume_tmp=$_FILES['reseume']['tmp_name'];

                $dest='Reseume/'.$reseume;
                move_uploaded_file($reseume_tmp,$dest);
             
$sql="insert into `job_applicant` (`name`,`email`,`phone`,`job_id`,`reseume`,`experience`) values ('$name','$email','$phone','$job_id','$reseume','$experience')";
$result=mysqli_query($conn,$sql);
if($result){
echo ' <div class="alert alert-success" role="alert">
Your Details Is Successfully Submitted !
</div>';
}
else{
 echo '  <div class="alert alert-danger" role="alert">
  Something Went Wrong !
  </div>';
  
}
              
            }
                
                ?>
                <div class="card-body" style="background-color:cyan;">
                    <form action="<?php echo $_SERVER['REQUEST_URI'] ?>" method="post" enctype="multipart/form-data">

                        <div class="form-group">
                            <input type="text" name="name" class="form-control" placeholder="Name of Applicant" id="">
                        </div>

                        <div class="form-group">
                            <input type="email" name="email" class="form-control" placeholder="Email of Applicant"
                                id="">
                        </div>

                        <div class="form-group">
                            <input type="number" name="phone" class="form-control" placeholder="Phone No of Applicant"
                                id="">
                        </div>


                        <div class="form-group">
                            <input type="number" name="experience" class="form-control" placeholder="Experience Years"
                                id="">
                        </div>

                        <div class="form-group">
                            <input type="file" name="reseume" class="form-control" placeholder="Reseume No of Applicant"
                                id="">
                        </div>


                        <div class="d-flex justify-content-center">
                            <button type="submit" class="btn btn-outline-info mx-2">Apply</button>
                            <button type="reset" class="btn btn-outline-danger mx-2">Cancel</button>
                        </div>

                    </form>
                </div>
            </div>


            <div class="card-footer" style="background-color:black;"></div>
        </div>

    </div>

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

<?php }

else{ ?>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
    integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
<div class="container">
    <div class="col-md-6 offset-md-3">

        <div class="shadow-lg my-4 bg-white rounded">

            <div class="card-footer" style="background-color:chartreuse;"></div>
            <div class="card-header" style="background-color:darkseagreen;">
                <h5 class="text-center"><i><b>Register As Applicant</b></i></h5>
            </div>

            <div class="card-body">

                <form action="<?php echo $_SERVER['REQUEST_URI'] ?>" method="post">
                    <?php 
if($_SERVER['REQUEST_METHOD']=='POST'){

    $email= $_POST['email'];
    $password= $_POST['password'];
    $cpassword= $_POST['cpassword'];
    $user= $_POST['applicant'];


$sql1="select * from `users` where `email`='$email'";
$result=mysqli_query($conn,$sql1);
$nums=mysqli_num_rows($result);

if($nums==1){
  
echo ' Email Already Exist Id' ;

}

else{
    
if($password=$cpassword){



    $sql="insert into `users` (`email`,`password`,`cpassword`,`user`) values ('$email','$password','$cpassword','$user')";
$result=mysqli_query($conn,$sql);
if($result){
    echo 'Inserted';

}
else{
    echo 'wrongsa';
}

}


else{

    echo 'Password Did Not Match';
}
}

}

?>

                    <div class="form-group">
                        <input type="email" name="email" class="form-control" placeholder="Email Address" id="">

                    </div>

                    <div class="form-group">
                        <input type="text" name="password" id="" placeholder="Password" class="form-control">
                    </div>
                    <div class="form-group">
                        <input type="password" name="cpassword" id="" placeholder="Conform-Password"
                            class="form-control">
                    </div>
                    <div class="form-group">
                        <input type="hidden" name="applicant" value="applicant" id="" placeholder="Conform-Password"
                            class="form-control">
                    </div>

                    <div class="d-flex justify-content-center ">
                        <button type="submit" class="btn btn-success mt-5 mx-1">Register</button>
                        <a href="login_emp.php"><button type="button"
                                class="btn btn-outline-info mt-5 mx-1">Login</button></a>
                    </div>

                </form>

            </div>
            <div class="card-footer" style="background-color:chartreuse;"></div>
        </div>

    </div>
</div>


<?php
}
?>