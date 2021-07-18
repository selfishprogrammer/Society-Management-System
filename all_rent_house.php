<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <title>Rent House</title>
</head>

<body style="background-color:darkgrey;">

    <div class="shadow-sm bg-white rounded" style="background-color: cyan;">
        <div class="card-footer" style="background-color:thistle;"></div>
        <div class="card-body" style="background-color: white;">
            <h5 class="text-center" style="font-style:italic;"><b><i> Our Buildings For Rent</i></b></h5>
        </div>
        <div class="card-footer" style="background-color: thistle;"></div>
    </div>
    <div class="container">


        <?php 
include 'dbconn.php';
$sql="select * from `users`";
$result=mysqli_query($conn,$sql);
while($row=mysqli_fetch_assoc($result)){
if($row['rent']=='yes'){



echo '        <div class="shadow-sm my-4 bg-white rounded" style="background-color: cyan;">
<div class="card-footer" style="background-color:thistle;"></div>
<div class="card-body">


    <div class="" style="width: 100%;">
        <div class="row no-gutters">
            <div class="col-md-4">
                <img src="Details/'.$row['fdetails'].'" class="card-img" height="250" alt="...">

               <a href="rent_inquery.php?rent_id='.$row['building_no'].'" ><button type="submit"  class="form-control btn btn-outline-info my-4">VIEW FACILITIES</button></a>
            </div>
            <div class="col-md-8">
                <h5 class="text-center my-2"><i><b>'.$row['building_name'].'</b></i></h5><hr>
                <h6 class="mx-4 my-4"><i><b>BUILDING NAME : <span style="color:blue;"> '.$row['building_name'].'</span></b></i></h6>
                <h6 class="mx-4 my-4"><i><b>BUILDING NUMBER :<span style="color:blue;"> '.$row['building_no'].'</span></b></i></b></i></h6>
                <h6 class="mx-4 my-4"><i><b>OWNER NAME :<span style="color:blue;"> '.$row['name'].'</span></b></i></b></i></h6>
                <h6 class="mx-4 my-4"><i><b>OWNER EMAIL :<span style="color:blue;"> '.$row['email'].'</span></b></i></b></i></h6>
                <h6 class="mx-4 my-4"><i><b>OWNER PHONE :<span style="color:blue;"> '.$row['phone'].'</span></b></i></b></i></h6>
                <h6 class="mx-4 my-4"><i><b>FLAT CAPICITY :<span style="color:blue;"> '.$row['flat'].'</span></b></i></b></i></h6>
            </div>
        </div>
    </div>


</div>

<div class="card-footer" style="background-color:thistle;"></div>
</div>';
}
}

?>













    </div>
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