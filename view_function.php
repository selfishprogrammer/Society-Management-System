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
        <div class="card-body" style="overflow-x:auto;">
        <table class="table table-bordered my-4" style="border-width: 20px; ">
            <thead style="background-color:darkgray;">
                <tr>
                    <th scope="col">Serial No</th>
                    <th scope="col">Function Name</th>
                    <th scope="col">Function Start Date</th>
                    <th scope="col">Function End Date</th>
                    <th scope="col">Function Description</th>
                    <th scope="col">Function Poster</th>
                    <th scope="col">Function Money</th>
                    <th scope="col">Update Job</th>
                    <th scope="col">Delete Job</th>
                </tr>
            </thead>
            <tbody>

                <?php

$sql="select * from `function`";
$result=mysqli_query($conn,$sql);
while($row=mysqli_fetch_assoc($result)){
echo ' <tr>
<td>'.$row['function_slno'].'</td>
<td>'.$row['function_name'].'</td>
<td>'.$row['date_of_function'].'</td>
<td>'.$row['date_of_function_end'].'</td>
<td>'.$row['function_desp'].'</td>
<td><img src="Function/'.$row['function_poster'].'" alt="" height="50" width="50"></td>
<td>'.$row['function_money'].'</td>
<td> <a href="update_function.php?function_id='.$row['function_slno'].'"><button type="button" class="btn btn-success">Update</button></td></a>
<td><a href="delete_function.php?function_id='.$row['function_slno'].'"><button type="button" class="btn btn-danger">Delete</button></td></a>
</tr>';
}


?>





            </tbody>
        </table>



        </table>
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