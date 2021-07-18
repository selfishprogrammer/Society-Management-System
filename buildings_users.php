<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Acme&display=swap" rel="stylesheet">

    <title>Our Building</title>
</head>

<body style="background-image: url(img/building.png);">

    <div class="container">
        <div class="shadow rounded my-1" style="height: 60px; background-color:#fff;">
            <h1 class="text-center"><b><i><span style="color:blue;">Our</span><span class="mx-3"
                            style="color:gold;">Buildings</span></i></b></h1>
        </div>
        <!-- Building -->
        <div class="col-md-12">
            <div class="row">
                <?php

include 'dbconn.php';
$sql="select * from `users`";

$result=mysqli_query($conn,$sql);
while($row=mysqli_fetch_assoc($result)){
?>

                <div class="shadow-sm bg-white border mx-4 my-4" style="width: 20rem;">
                    <img src="Building/<?php echo $row['fdetails'] ?>" height="200px" width="100%" class="card-img" alt="">
                    <div class="text-center my-3">Building Name</div>
                    <hr>
                    <div class="mx-2" style="    font-size: 19px;
    font-family: monospace;
    color: currentColor;
    background-color: burlywood;">BUILDING NO : <span><i><b><?php echo $row['building_no'] ?></b></i></span></div>
                    <div class="mx-2 my-2" style=" font-size: 15px;
    font-family: emoji;">FLOOR NUMBERS : <span style="font-size: 15px;
    font-family: cursive;"><i><?php echo $row['floor'] ?> N</i></span></div>
                    <div class="mx-2 my-2" style="    font-size: 15px;
    font-family: emoji;">RENT AVALIABLE : <span style="font-size: 15px;
    font-family: cursive;"><i><?php echo $row['rent'] ?></i></span></div>
                    <div class="mx-2 my-2" style=" font-size: 15px;
    font-family: emoji;">FLAT NUMBER : <span style="font-size: 15px;
    font-family: cursive;"><i><?php echo $row['flat'] ?></i></span></div>
                    <div class="mx-2 my-2" style=" font-size: 15px;
    font-family: emoji;">OWNER NAME : <span style="font-size: 15px;
    font-family: cursive;"><i><?php echo $row['name'] ?></i></span></div>
                    <hr>

                    <div class="d-flex justify-content-center mb-2">
                        <?php 
                        if($row['rent']=='yes'){

                       
                        
                        ?>
                        <a href="rent_inquery.php?rent_id=<?php  echo $row['building_no'] ?>"><button type="submit" style="width: 18rem; border-radius:18px;" class="btn btn-success form-control mx-1">VIEW RENT</button></a>

                        <?php } 
                        else{
                        
                        ?>

                        <button type="submit" class="btn btn-danger form-control mx-1" style="width: 18rem; border-radius:18px;" disabled>VIEW RENT</button>

                        <?php } ?>
                    </div>

                </div>

                <?php } ?>

                <!-- Building -->
            </div>
        </div>
    </div>
    <style>
    #build_design {
        font-family: 'Acme', sans-serif;
        font-size: 20px;
    }
    </style>
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