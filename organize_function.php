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

    <title>Host Meething</title>
</head>

<body style="background-color:mediumspringgreen;">

    <div class="container">
        <div class="card my-4">
            <?php

if($_SERVER['REQUEST_METHOD']=='POST'){
    $function_name=$_POST['function_name'];
    $date_of_function=$_POST['date_of_function'];
    $date_of_function_end=$_POST['date_of_function_end'];
    $function_desp=$_POST['function_desp'];
    $function_money=$_POST['function_money'];
    $function_poster=$_FILES['function_poster']['name'];
    $function_poster_tmp=$_FILES['function_poster']['tmp_name'];

    $dest="Function/".$function_poster;
    move_uploaded_file($function_poster_tmp,$dest);

    $sql="insert into `function` (`function_name`,`date_of_function`,`date_of_function_end`,`function_desp`,`function_poster`,`function_money`) values('$function_name','$date_of_function','$date_of_function_end','$function_desp','$function_poster','$function_money')";
    $result=mysqli_query($conn,$sql);
    if($result){
    echo '<div class="alert alert-success" role="alert">
    Function Added Successfully.
    </div>';
      }
      else{
        echo '<div class="alert alert-danger" role="alert">
       Something Went Wrong.
      </div>';
      }
}




?>

            <div class="card-header text-center" style="background-color: cyan;">
                <h4> <i><b>Organize Function</b></i></h4>
            </div>
            <div class="card-body">
                <form action="<?php echo $_SERVER['REQUEST_URI'] ?>" method="post" enctype="multipart/form-data">


                    <div class="form-group">

                        <input type="text" name="function_name" placeholder="Function Name" class="form-control" id="">

                    </div>
                    <div class="form-group">
                        <label for="">Date Of Function</label>
                        <input type="date" name="date_of_function" id="" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Date Of End Function</label>
                        <input type="date" name="date_of_function_end" id="" class="form-control">
                    </div>
                    <div class="form-group">

                        <textarea name="function_desp" placeholder="Function Description" class="form-control"
                            style="height: 160px;"></textarea>
                    </div>
                    <div class="form-group">

                        <input type="file" name="function_poster" class="form-control" id="">


                    </div>

                    <div class="form-group">

                        <textarea name="function_money" placeholder="Money Collection" class="form-control"
                            style="height: 100px;"></textarea>
                    </div>





                    <div class="form-group">
                        <button type="submit" class="btn btn-outline-success form-control">Host Function</button>

                    </div>
                </form>
            </div>
            <div class="card-footer" style="background-color: cyan;">

            </div>

        </div>



    </div>






    <?php }?>