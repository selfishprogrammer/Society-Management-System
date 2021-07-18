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

    <title>View Complain</title>
</head>

<body style="background-color: gray;">
    <div class="d-flex justify-content-between ">
        <a href="index.php"><button type="button" class="btn btn-success mt-4 mx-4">Back to Home</button></a>
        <a href="logout.php"><button type="button" class="btn btn-success mt-4 mx-4">Admin {Logout}</button></a>
    </div>



    <div class="container">
    <div class="mt-5">
        <div class="card-footer" style="background-color: black;"></div>
<div class="card-body" style="overflow-x: auto; background-color:white;">



    <table id="table">
  <thead style="background-color: cyan;">
    <tr>
      <th scope="col">Seriol No</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Building Name</th>
      <th scope="col">Building Number</th>
      <th scope="col">Complain</th>
    </tr>
  </thead>
<?php

$sql="select * from `complain`";
$result=mysqli_query($conn,$sql);
while($row=mysqli_fetch_assoc($result)){
echo '  <tbody>
<tr>
  <td>'.$row['slno'].'</th>
  <td>'.$row['name'].'</td>
  <td>'.$row['email'].'</th>
  <td>'.$row['building_name'].'</td>
  <td>'.$row['building_no'].'</th>
  <td>'.$row['complain'].'</td>
</tr>

</tbody>';
}

?>


</table>



</div>


        <div class="card-footer" style="background-color: black;"></div>
        </div>
<style>
                        #table {
                            font-family: arial, sans-serif;
                            border-collapse: collapse;
                            width: 100%;
                        }

                        td,
                        th {
                            border: 1px solid #dddddd;
                            text-align: left;
                            padding: 8px;
                        }
                        </style>

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


<?php

    }

?>