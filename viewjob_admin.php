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

    <title>View User</title>
</head>

<body style="background-color: darkgray;">
    <div class="container-fluid">
        <table class="table table-bordered my-4" style="border-width: 20px;">
            <thead style="background-color:darkgray;">
                <tr>
                    <th scope="col">Serial No</th>
                    <th scope="col">Job Title</th>
                    <th scope="col">Job Description</th>
                    <th scope="col">Age Range</th>
                    <th scope="col">Experience</th>
                    <th scope="col">Education</th>
                    <th scope="col">Join Time</th>
                    <th scope="col">Leave Time</th>
                    <th scope="col">Salary</th>
                    <th scope="col">Update Job</th>
                    <th scope="col">Delete Job</th>

                </tr>
            </thead>
            <tbody>

                <?php

$sql="select * from `jobs`";
$result=mysqli_query($conn,$sql);
while($row=mysqli_fetch_assoc($result)){
echo ' <tr>
<td>'.$row['slno'].'</td>
<td>'.$row['job_title'].'</td>
<td>'.$row['job_desp'].'</td>
<td>'.$row['age_range'].'</td>
<td>'.$row['experience'].'</td>
<th>'.$row['education'].'</th>
<td>'.$row['join_time'].'</td>
<td>'.$row['leave_time'].'</td>
<td>'.$row['salary'].'</td>
<td> <a href="update_job.php?job_id='.$row['slno'].'"><button type="button" class="btn btn-success">Update</button></td></a>
<td><a href="delete_job.php?job_id='.$row['slno'].'"><button type="button" class="btn btn-danger">Delete</button></td></a>
</tr>';
}


?>





            </tbody>
        </table>



        </table>

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