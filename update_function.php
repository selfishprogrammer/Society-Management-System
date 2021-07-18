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
                <h4> <i><b>Update Function</b></i></h4>
            </div>
            <div class="card-body">



                <?php 
            $function_id=$_GET['function_id'];
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
 

  $sql1="update `function` set `function_name`='$function_name',`date_of_function`='$date_of_function',`date_of_function_end`='$date_of_function_end',`function_desp`='$function_desp',`function_poster`='$function_poster',`function_money`='$function_money'  where `function_slno`='$function_id'";
  $result1=mysqli_query($conn,$sql1);
  if($result1){
echo '<div class="alert alert-success" role="alert">
Function is Updated Successfully.
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



$sql="select * from `function` where `function_slno` ='$function_id'";
$result=mysqli_query($conn,$sql);
while($row=mysqli_fetch_assoc($result)){
  





?>



                <form action="<?php echo $_SERVER['REQUEST_URI'] ?>" method="post" enctype="multipart/form-data">


                    <div class="form-group">

                        <input type="text" name="function_name" value="<?php echo $row['function_name'] ?>"
                            placeholder="Function Name" class="form-control" id="">

                    </div>
                    <div class="form-group">
                        <label for="">Date Of Function</label>
                        <input type="date" name="date_of_function" value="<?php echo $row['date_of_function'] ?>" id=""
                            class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="">Date Of End Function</label>
                        <input type="date" name="date_of_function_end"
                            value="<?php echo $row['date_of_function_end'] ?>" id="" class="form-control">
                    </div>
                    <div class="form-group">

                        <textarea name="function_desp" placeholder="Function Description"
                            value="<?php echo $row['function_desp'] ?>" class="form-control"
                            style="height: 160px;"></textarea>
                    </div>
                    <div class="form-group">

                        <input type="file" name="function_poster" class="form-control"
                            value="<?php echo $row['function_poster'] ?>" id="">


                    </div>

                    <div class="form-group">

                        <textarea name="function_money" placeholder="Money Collection"
                            value="<?php echo $row['function_money'] ?>" class="form-control"
                            style="height: 100px;"></textarea>
                    </div>





                    <div class="form-group">
                        <button type="submit" class="btn btn-outline-success form-control">Host Function</button>

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