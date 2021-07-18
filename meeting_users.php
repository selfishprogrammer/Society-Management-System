<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <title>Upcoming Meeting</title>

</head>

<body style="background-color:hotpink;">



    <div class="container">
       
            <div class="shadow-sm bg-white rounded">
                <div class="card-footer" style="background-color: cyan;">

                </div>
                <div class="card-body" style="background-color:lavender;">

                    <h4 class="text-center"><i><b>Upcomming Meeting</b></i></h4>



                </div>
                <div class="card-footer" style="background-color: cyan;">

                </div>

            </div>

            <div class="shadow-sm bg-white rounded my-2" style="background-color: cyan;">
                <div class="card-footer" style="background-color: cyan;">

                </div>
                <div class="card-body" style="overflow-x:auto;">

                    <table id="table" class="">
                        <thead>
                            <tr style="background-color:lightblue;">
                                <th>Meeting No</th>
                                <th>Meeting For</th>
                                <th>Meeting Date</th>
                                <th>Meeting Time</th>
                                <th>Joining Link</th>
                                <th>Join</th>
                            </tr>
                        </thead>

                        <?php
                                        include 'dbconn.php';
                                        $sql="select * from `host_meeting` ";
                                        $result=mysqli_query($conn,$sql);
                                        while($row=mysqli_fetch_assoc($result)){
                                        echo '


                                        <tbody>
                                        <tr>
                                            <td>'.$row['meeting_slno'].'</td>
                                            <td>'.$row['meeting'].'</td>
                                            <td>'.$row['date_of_meeting'].'</td>
                                            <td>'.$row['time_of_meeting'].'</td>
                                            <td><a class="nav-link" href="'.$row['meeting_link'].'" target=”_blank”>'.$row['meeting_link'].'</a></td>
                                            <td> <a href="'.$row['meeting_link'].'" target=”_blank”><button type="button" class="btn btn-success">Join Meeting</button></td></a>

                                        </tr>
                                        
                                        </tbody>


                                        ';
                                        }


                                        ?>
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
                    </table>

                </div>



                <div class="card-footer" style="background-color: cyan;">

                </div>
            </div>
      
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