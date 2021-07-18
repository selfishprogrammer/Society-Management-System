<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <title>Rent</title>
</head>

<body style="background-color:darkturquoise;">


    <?php 
include 'dbconn.php';
$rent_id=$_GET['rent_id'];
$sql="select * from `users` where `building_no`='$rent_id'";
$result=mysqli_query($conn ,$sql);
while($row=mysqli_fetch_assoc($result)){
$building_name=$row['building_name'];
$flat=$row['flat'];
}
?>
    <?php
$rent_id=$_GET['rent_id'];
$sql1="select * from `add_building` where `building_no`='$rent_id'";
$result1=mysqli_query($conn ,$sql1);
while($row1=mysqli_fetch_assoc($result1)){



?>
  <div class="shadow-sm bg-white rounded">
            <div class="card-footer" style="background-color: cyan;">

            </div>
            <div class="card-body" style="background-color: gray;">

               <h4 class="text-center"><i><b>Book You Room/Flat</b></i></h4>
<h5 class="text-center"><b><i><a href="index.php" class="nav-link">Back to home</a></i></b></h5>


            </div>
            <div class="card-footer" style="background-color: cyan;">

            </div>

        </div>

    <div class="container">

        <div id="carouselExampleSlidesOnly" class="carousel slide my-4" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="Building/<?php echo $row1['img1']?>" height="400" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="Building/<?php echo $row1['img2']?>" height="400" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="Building/<?php echo $row1['img3']?>" height="400" class="d-block w-100" alt="...">
                </div>
            </div>
        </div>



        <div class="shadow-sm bg-white rounded my-2" style="background-color: cyan;">
            <div class="card-footer" style="background-color: cyan;">

            </div>
            <div class="card-body">

                <h5 class="text-center"><b><i><?php echo $building_name ?> </i></b></h5>

            </div>
            <div class="card-footer" style="background-color: cyan;">

            </div>
        </div>



        <div class="shadow-sm bg-white rounded my-4">
            <div class="card-footer" style="background-color: cyan;">

            </div>
            <div class="card-body">

                <h3 class="text-center my-3"><b><i>FACILITIES OF RENT</i></b></h3>
                <h6 class="my-3"><b><i>WATER : <span style="color:blue"><?php echo $row1['water']?></span></i></b></h6>
                <h6 class="my-3"><b><i>ELECTRICITY : <span
                                style="color:blue"><?php echo $row1['electric']?></span></i></b></h6>
                <h6 class="my-3"><b><i>CCTV : <span style="color:blue"><?php echo $row1['cctv']?></span></i></b></h6>
                <h6 class="my-3"><b><i>LIFT : <span style="color:blue"><?php echo $row1['lift']?></span></i></b></h6>
                <h6 class="my-3"><b><i>GAURD : <span style="color:blue"><?php echo $row1['gaurd']?></span></i></b></h6>



            </div>
            <div class="card-footer" style="background-color: cyan;">

            </div>

        </div>








        <div class="shadow-sm bg-white rounded my-4">
            <div class="card-footer" style="background-color: cyan;">

            </div>
            <div class="card-body">

                <h3 class="text-center my-3"><b><i>REQUIREMENT OF RENT</i></b></h3>
                <h6 class="my-3"><b><i>FLAT CAPACITY : <span
                                style="color:blue"><?php echo $row1['flat_facilities']?></span></i></b></h6>
                <h6 class="my-3"><b><i>ELECTRIC CHARGE : <span
                                style="color:blue"><?php echo $row1['water_charge']?></span></i></b></h6>
                <h6 class="my-3"><b><i>WATER CHARGE : <span
                                style="color:blue"><?php echo $row1['electricity_charge']?></span></i></b></h6>
                <h6 class="my-3"><b><i>MONTHLY RENT : <span
                                style="color:blue"><?php echo $row1['monthly_rent']?></span></i></b></h6>
                <h6 class="my-3"><b><i>EARLY ADVANCE : <span
                                style="color:blue"><?php echo $row1['advance_rent']?></span></i></b></h6>



            </div>
            <div class="card-footer" style="background-color: cyan;">

            </div>

        </div>




        <div class="shadow-sm bg-white rounded my-4">
            <div class="card-footer" style="background-color: cyan;">

            </div>
            <div class="card-body">

                <h6 class="text-center"><b><i>Kindly Contact in given number for visiting and just looking ad booking a
                            room / flat in our society. </i></b></h6>



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