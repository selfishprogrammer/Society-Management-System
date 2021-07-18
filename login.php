<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <title>Login</title>
</head>

<body style="background-color:gray;">
<?php include 'dbconn.php'; ?>

    <div class="container">
        <div class="col-md-6 offset-md-3">
            <div class="card my-4">
<?php
if($_SERVER['REQUEST_METHOD']=='POST'){
$building=$_POST['building_no'];
$password=$_POST['password'];
$sql="select * from `users` where `building_no`='$building' and `password` = '$password'";
$result=mysqli_query($conn ,$sql);
$nums=mysqli_num_rows($result);
if($nums==1){
$row=mysqli_fetch_assoc($result);

  session_start();

  $_SESSION['loggedin']=true;
  $_SESSION['user']=$row['user'];
  $_SESSION['building_no']=$building;
  $_SESSION['slno']=$row['slno'];

if($row['user']=="admin"){

  header('location:admin.php');

}


else{
  header('location:index.php');
}


}

else{
  echo 'Wrong Password or Building No Please Check';
}
}
?>






                <div class="card-header text-center" style="background-color:cyan;">

                    <h5><b><i>LOGIN</i></b></h5>

                </div>

                <div class="card-body">
                    <form action="<?php echo $_SERVER['REQUEST_URI'] ?>" class=" ml-3 mr-3" method="POST">
                        <div class="form-group">

                            <input type="number" name="building_no" class="form-control" placeholder="Building Number"
                                id="">

                        </div>

                        <div class="form-group">

                            <input type="password" name="password" class="form-control" placeholder="Password" id="">

                        </div>




                        <div class="d-flex justify-content-center mx-3">
                            <div class="form-group">

                                <button type="submit" class="btn btn-outline-success">Login</button>
                                <button type="reset" class="btn btn-outline-danger">Reset</button>
                            </div>

                        </div>
                    </form>

                </div>
                <div class="card-footer" style="background-color:cyan;"></div>
            </div>
        </div>
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