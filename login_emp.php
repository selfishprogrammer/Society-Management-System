<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <title>Login For Job</title>
</head>

<body>

    <div class="container">
        <div class="col-md-6 offset-md-3 mt-5">

            <div class="shadow-lg bg-white rounded">
                <div class="card-footer">
                    <h6><i><b>Applicant Login</b></i></h6>

                </div>
                <?php
                    include 'dbconn.php';
                    if($_SERVER['REQUEST_METHOD'] =='POST'){
$login=false;
                        $email=$_POST['email'];
                        $password=$_POST['password'];
                        $sql="select * from `users` where `email`='$email' and `password`='$password' ";
                        $result=mysqli_query($conn,$sql);
                        $nums=mysqli_num_rows($result);
                        if($nums==1){
                            $login=true;
                            $row=mysqli_fetch_assoc($result);


                            session_start();
                            $_SESSION['loggedin']=true;
                            $_SESSION['email']=$row['email'];
                            $_SESSION['slno']=$row['slno'];
                            if($row['user']=="applicant"){
                                header('location:job_apply.php');
                            }
                            else{
                                header('location:login_emp.php');
                            }

                        }
                    
                    }
                    
                
                    
                    
                    ?>
                <div class="card-body">
                    <form action="<?php echo $_SERVER['REQUEST_URI'] ?>" method="post">
                  
                        <div class="form-group">

                            <input type="email" name="email" placeholder="Email " class="form-control" id="">
                        </div>
                        <div class="form-group">

                            <input type="password" name="password" placeholder="Password" class="form-control" id="">
                        </div>

                        <div class="d-flex justify-content-center">

                            <button type="submit" class="btn btn-info mx-2">Login</button>
                            <button type="reset" class="btn btn-danger">Cancel</button>
                        </div>

                    </form>
                </div>
                <div class="card-footer"></div>
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