<?php
include 'dbconn.php';
session_start();
if(isset($_SESSION['loggedin']) && $_SESSION['loggedin']=true){

    

  
    $building_no=$_GET['building_no'];
    $sql="select * from `users` where `building_no`='$building_no'";
    $result=mysqli_query($conn ,$sql);
    while($row=mysqli_fetch_assoc($result)){
    $building_name=$row['building_name'];
    $flat=$row['flat'];
    }
    

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

    <title>Add Rent</title>
</head>

<body>
    <div class="container">
        <div class="shadow-sm bg-white rounded">
            <div class="card-footer" style="background-color: cyan;">

            </div>
            <?php 
              $building_no=$_GET['building_no'];
            if($_SERVER['REQUEST_METHOD'] == 'POST'){
                $flat_facilities=$_POST['flat_facilities'];
                $water_charge=$_POST['water_charge'];
                $electricity_charge=$_POST['electricity_charge'];
                $monthly_rent=$_POST['monthly_rent'];
                $advance_rent=$_POST['advance_rent'];
                $water=$_POST['water'];
                $electric=$_POST['electric'];
                $cctv=$_POST['cctv']; 
                $lift=$_POST['lift'];

                $gaurd=$_POST['gaurd']; 
                $img1=$_FILES['img1']['name'];
                $img2=$_FILES['img2']['name'];
                $img3=$_FILES['img3']['name'];
                $img1_tmp=$_FILES['img1']['tmp_name'];
                $img2_tmp=$_FILES['img2']['tmp_name'];
                $img3_tmp=$_FILES['img3']['tmp_name'];


                $dist1="Building/".$img1;
                move_uploaded_file($img1_tmp,$dist1);
                $dist2="Building/".$img2;
                move_uploaded_file($img2_tmp,$dist2);
                $dist3="Building/".$img3;
                move_uploaded_file($img3_tmp,$dist3);
                $sql="insert into `add_building` (`flat_facilities`,`water_charge`,`electricity_charge`,`monthly_rent`,`advance_rent`,`water`,`electric`,`cctv`,`lift`,`gaurd`,`img1`,`img2`,`img3`,`building_no`) values ('$flat_facilities','$water_charge','$electricity_charge','$monthly_rent','$advance_rent','$water','$electric','$cctv','$lift','$gaurd','$img1','$img2','$img3', '$building_no')";
            $result=mysqli_query($conn,$sql);
            
            if($result){
                echo '<div class="alert alert-success" role="alert">
                Job is Added Successfully.
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
                <h5 class="text-center"><b><i><?php echo $building_name ?></i></b></h5>

            </div>
            <div class="card-footer" style="background-color: cyan;">

            </div>
        </div>


        <div class="shadow-sm bg-white rounded my-4">
            <div class="card-footer" style="background-color: cyan;">

            </div>
            <div class="card-body">
                <h3 class="text-center my-3"><b><i>REQUIREMENT OF RENT</i></b></h3>
                <form action="<?php echo $_SERVER['REQUEST_URI'] ?>" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <input type="text" name="flat_facilities" value="<?php echo $flat ?>" class="form-control"
                            placeholder="Flat Facilities" id="">
                    </div>
                    <div class="form-group">
                        <input type="text" name="water_charge" class="form-control" placeholder="Water Charge" id="">
                    </div>
                    <div class="form-group">
                        <input type="text" name="electricity_charge" class="form-control"
                            placeholder="Electricity Charge" id="">
                    </div>
                    <div class="form-group">
                        <input type="text" name="monthly_rent" class="form-control" placeholder="Monthly Rent" id="">
                    </div>
                    <div class="form-group">
                        <input type="text" name="advance_rent" class="form-control" placeholder="Advanced Rent" id="">
                    </div>










                    <h3 class="text-center my-3"><b><i>FACILITIES OF RENT</i></b></h3>
                    <div class="form-group">
                        <input type="text" name="water" class="form-control" placeholder="Water Timing" id="">
                    </div>
                    <div class="form-group">
                        <input type="text" name="electric" class="form-control" placeholder="Electric Timing" id="">
                    </div>
                    <div class="form-group">
                        <input type="text" name="cctv" class="form-control" placeholder="CCTV" id="">
                    </div>
                    <div class="form-group">
                        <input type="text" name="lift" class="form-control" placeholder="Lift" id="">
                    </div>
                    <div class="form-group">
                        <input type="text" name="gaurd" class="form-control" placeholder="Gaurd" id="">
                    </div>

                    <h3 class="text-center my-3"><b><i>IMAGE OF ROOMS</i></b></h3>
                    <div class="form-group">
                        <input type="file" name="img1" class="form-control" placeholder="CCTV" id="">
                    </div>
                    <div class="form-group">
                        <input type="file" name="img2" class="form-control" placeholder="Lift" id="">
                    </div>
                    <div class="form-group">
                        <input type="file" name="img3" class="form-control" placeholder="Gaurd" id="">
                    </div>

                    <div class="form-group">
                        <div class="d-flex justify-content-center">
                            <button type="submit" style="width: 18rem;" class="btn btn-outline-info">Add</button>
                        </div>
                    </div>
                </form>
            </div>

            <div class="card-footer" style="background-color: cyan;">

            </div>

        </div>
    </div>
    <?php }
else{
    echo 'Login First Please';
}

?>
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