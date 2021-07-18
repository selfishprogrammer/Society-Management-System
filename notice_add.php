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

    <title>Admin||Notice</title>
</head>

<body style="background-color:cadetblue;">
    <div class="container">
        <div class="card">

            <div class="card-header text-center" style="background-color: cyan;">
                <h5><b><i>Notice</i></b></h5>

            </div>

            <?php 
if($_SERVER['REQUEST_METHOD']=='POST'){
$notice_title=$_POST['notice_title'];
    $notice=$_POST['notice'];
$date_of_notice=$_POST['date_of_notice'];
$president_sign=$_FILES['president_sign']['name'];
$president_sign_tmp=$_FILES['president_sign']['tmp_name'];
$secretry_sign=$_FILES['secretry_sign']['name'];
$secretry_sign_tmp=$_FILES['secretry_sign']['tmp_name'];


$president_sign_dest="President/".$president_sign;
move_uploaded_file($president_sign_tmp,$president_sign_dest);
$secretry_sign_dest="Secretry/".$secretry_sign;
move_uploaded_file($secretry_sign_tmp,$secretry_sign_dest);

$sql="insert into `notice` (`notice_title`,`notice_desp`,`date_of_notice`,`precident_sign`,`secretry_sign`) values('$notice_title','$notice','$date_of_notice','$president_sign','$secretry_sign')";
$result=mysqli_query($conn,$sql);
if($result){
    echo '<div class="alert alert-success" role="alert">
    Notice is Added Successfully.
    </div>';
      }
      else{
        echo '<div class="alert alert-danger" role="alert">
       Something Went Wrong.
      </div>';
      }
      
    
}


?>
            <div class="card-body">


                <form action="<?php echo $_SERVER['REQUEST_URI'] ?>" method="post" enctype="multipart/form-data">

                    <div class="form-group">

                        <input type="text" name="notice_title" placeholder="Notice Title" class="form-control">
                    </div>



                    <div class="form-group">

                        <textarea name="notice" placeholder="Admin , Write Notice" class="form-control"
                            style="height: 180px;"></textarea>

                    </div>
                    <label for="">Date of Notice</label>
                    <div class="form-group">

                        <input type="date" name="date_of_notice" class="form-control">
                    </div>
                    <div class="form-group">

                        <input type="file" name="president_sign" class="form-control">
                    </div>
                    <div class="form-group">

                        <input type="file" name="secretry_sign" class="form-control">
                    </div>

                    <div class="form-group">

                        <button type="submit" class="form-control btn btn-success">Add Notice</button>
                    </div>
                </form>

            </div>
            <div class="card-footer" style="background-color: cyan;">



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