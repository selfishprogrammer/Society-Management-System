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
            $notice_id=$_GET['notice_id'];
if($_SERVER['REQUEST_METHOD']=='POST'){
  $notice_desp=$_POST['notice_desp'];
  $date_of_notice=$_POST['date_of_notice'];
$notice_title=$_POST['notice_title'];
 

  $sql1="update `notice` set `notice_title`='$notice_title' , `notice_desp`='$notice_desp',`date_of_notice`='$date_of_notice' where `notice_slno`='$notice_id'";
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



$sql="select * from `notice` where `notice_slno` ='$notice_id'";
$result=mysqli_query($conn,$sql);
while($row=mysqli_fetch_assoc($result)){
  





?>



                <form action="<?php echo $_SERVER['REQUEST_URI'] ?>" method="post" enctype="multipart/form-data">
                   
                <div class="form-group">

<input type="text" name=" notice_title" value="<?php echo $row['notice_title']; ?>"
    class="form-control">
</div>
                
                <div class="form-group">

                        <textarea name="notice_desp" value="<?php echo $row['notice_desp']; ?>"
                            placeholder="Admin , Write Notice" class="form-control" style="height: 180px;"></textarea>

                    </div>
                    <label for="">Date of Notice</label>
                    <div class="form-group">

                        <input type="date" name="date_of_notice" value="<?php echo $row['date_of_notice']; ?>"
                            class="form-control">
                    </div>
                    <div class="form-group">

                        <button type="submit" class="form-control btn btn-success">Update Notice</button>
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