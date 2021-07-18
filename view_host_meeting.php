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

    <title>View Meeting</title>
</head>

<body style="background-color: darkgray;">
    <div class="container">
        <div class="card-body" style="overflow-x:auto;">
            <table class="table table-bordered my-4" style="border-width: 20px; ">
                <thead style="background-color:darkgray;">
                    <tr>
                        <th scope="col">Serial No</th>
                        <th scope="col">Meeting Title</th>
                        <th scope="col">Meeting Link</th>
                        <th scope="col">Meeting Date</th>
                        <th scope="col">Meeting Time</th>
                        <th scope="col">Update Job</th>
                        <th scope="col">Delete Job</th>
                    </tr>
                </thead>
                <tbody>

                    <?php

$sql="select * from `host_meeting`";
$result=mysqli_query($conn,$sql);
while($row=mysqli_fetch_assoc($result)){
echo ' <tr>
<td>'.$row['meeting_slno'].'</td>
<td>'.$row['meeting'].'</td>
<td>'.$row['meeting_link'].'</td>
<td>'.$row['date_of_meeting'].'</td>
<td>'.$row['time_of_meeting'].'</td>


<td> <a href="meeting_update.php?meeting_id='.$row['meeting_slno'].'"><button type="button" class="btn btn-success">Update</button></td></a>
<td><a href="meeting_delete.php?meeting_id='.$row['meeting_slno'].'"><button type="button" class="btn btn-danger">Delete</button></td></a>
</tr>';
}


?>





                </tbody>
            </table>

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