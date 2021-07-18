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

    <title>Admin</title>
</head>

<body>
  
    <div class="card-header" style="background-color:black;">
        <div class="d-flex justify-content-between">
            <a href="index.php"><button type="button" class="btn btn-success mx-2">Back to Home</button></a>
            <a href="logout.php"><button type="button" class="btn btn-success mx-2">Admin {Logout}</button></a>
        </div>
    </div>
    <div class="container">
        <div class="shadow-lg bg-white rounded mt-5">
            <div class="card">
                <div class="card-header text-center" style="background-color:darkturquoise;">

                    <h3><b><i> ADMIN PAGE</i></b></h3>


                </div>

                <div class="card-body">

                    <div class="row">
                        <!-- user -->

                        <div class="mx-4 my-4">
                            <h5 class="text-center"><i><b>Total User/Buildings</b></i></h5>
                            <img src="img/user.png" height="160" width="160" alt="">
                            <h5 class="text-center"><i><b>Total User: 20</b></i></h5>
                            <a href="userview.php"><button type="submit" class="btn btn-info form-control my-2">VIEW
                                    USERS</button></a>
                        </div>

                        <!-- user -->
                        <!-- Notice -->

                        <div class="mx-4 my-4">
                            <h5 class="text-center"><i><b>Add Notice</b></i></h5>
                            <img src="img/addnotice.png" height="160" width="160" alt="">
                            <h5 class="text-center"><i><b>Total Notice: 20</b></i></h5>
                            <a href="notice_add.php"><button type="submit" class="btn btn-info form-control my-2">ADD
                                    NOTICE</button></a>
                        </div>
                        <!-- Notice -->
                        <!-- view Notice -->

                        <div class="mx-4 my-4">
                            <h5 class="text-center"><i><b>View Notice</b></i></h5>
                            <img src="img/vnotice.png" height="160" width="160" alt="">
                            <h5 class="text-center"><i><b>Total Notice: 20</b></i></h5>
                            <a href="view_notice.php"><button type="submit" class="btn btn-info form-control my-2">VIEW
                                    NOTICE</button></a>
                        </div>

                        <!-- view Notice -->
                        <!-- Arange Meeting -->
                        <div class="mx-4 my-4">
                            <h5 class="text-center"><i><b>Arange Meeting</b></i></h5>
                            <img src="img/meeting.png" height="160" width="160" alt="">
                            <h5 class="text-center"><i><b>Total Meeting: 20</b></i></h5>
                            <a href="host_meeting.php"><button type="submit"
                                    class="btn btn-info form-control my-2">MEETING</button></a>
                        </div>
                        <!-- Arange meeting -->
                        <!-- Arange Meeting -->
                        <div class="mx-4 my-4">
                            <h5 class="text-center"><i><b>View Meeting</b></i></h5>
                            <img src="img/meeting.png" height="160" width="160" alt="">
                            <h5 class="text-center"><i><b>Total Meeting: 20</b></i></h5>
                            <a href="view_host_meeting.php"><button type="submit"
                                    class="btn btn-info form-control my-2">VIEW MEETING</button></a>
                        </div>
                        <!-- Arange meeting -->
                        <!-- Arange function -->

                        <div class="mx-4 my-4">
                            <h5 class="text-center"><i><b>Arange Function</b></i></h5>
                            <img src="img/function.png" height="160" width="160" alt="">
                            <h5 class="text-center"><i><b>Total Function: 20</b></i></h5>
                            <a href="organize_function.php"><button type="submit"
                                    class="btn btn-info form-control my-2">FUNCTION</button></a>
                        </div>


                        <!-- Arange function -->
                        <!-- Arange function -->

                        <div class="mx-4 my-4">
                            <h5 class="text-center"><i><b>View Function</b></i></h5>
                            <img src="img/function.png" height="160" width="160" alt="">
                            <h5 class="text-center"><i><b>Total Function: 20</b></i></h5>
                            <a href="view_function.php"><button type="submit"
                                    class="btn btn-info form-control my-2">VIEW FUNCTION</button></a>
                        </div>


                        <!-- Arange function -->
                        <!-- Jobs -->
                        <div class="mx-4 my-4">
                            <h5 class="text-center"><i><b>Add Jobs</b></i></h5>
                            <img src="img/addjobs.png" height="160" width="160" alt="">
                            <h5 class="text-center"><i><b>Total Job: 20</b></i></h5>
                            <a href="addjob.php"><button type="submit" class="btn btn-info form-control my-2">ADD JOBS
                                </button></a>
                        </div>



                        <div class="mx-4 my-4">
                            <h5 class="text-center"><i><b>View Jobs</b></i></h5>
                            <img src="img/viewjobs.png" height="160" width="160" alt="">
                            <h5 class="text-center"><i><b>Total Jobs: 20</b></i></h5>
                            <a href="viewjob_admin.php"><button type="submit"
                                    class="btn btn-info form-control my-2">VIEW JOBS</button></a>
                        </div>
                        <!-- Jobs -->
                        <div class="mx-4 my-4">
                            <h5 class="text-center"><i><b>View Complain</b></i></h5>
                            <img src="img/complain.png" class="mx-2" height="160" width="160" alt="">
                            <h5 class="text-center"><i><b>Total Complain: 20</b></i></h5>
                            <a href="view_complain.php"><button type="submit" class="btn btn-info form-control my-2">VIEW COMPLAIN</button></a>
                        </div>


                        <div class="mx-4 my-4">
                            <h5 class="text-center"><i><b>Job Application</b></i></h5>
                            <img src="img/complain.png" class="mx-2" height="160" width="160" alt="">
                            <h5 class="text-center"><i><b>Total Application: 20</b></i></h5>
                            <a href="job_application_view.php"><button type="submit" class="btn btn-info form-control my-2">VIEW APPLICATION</button></a>
                        </div>
                    </div>
                </div>


            </div>

        </div>
    </div>


    <?php }?>
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