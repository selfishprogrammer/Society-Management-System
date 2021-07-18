<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Register</title>
</head>
<?php
                   
      include 'dbconn.php';             
                   
                   ?>

<body style="background-color:blanchedalmond;">
    <div class="container">


        <div class="shadow-sm my-4 bg-white rounded">
            <div class="card-header text-center" style="background-color:darkkhaki;">
                <h4><b><i>Register Your Flat/Room/House</i></b></h4>
            </div>
            <div class="card-body" >





                <!-- PHP CODE FOR REG -->


                <?php 
if($_SERVER['REQUEST_METHOD'] =='POST'){



    $owner_name=$_POST['name'];
    $owner_email=$_POST['email'];
    $owner_phone=$_POST['phone']; 
    $owner_password=$_POST['password'];
    $owner_cpassword=$_POST['cpassword'];
    $building_name=$_POST['building_name'];
    $building_no=$_POST['building_no'];
    $flour=$_POST['floor'];

    $rent=$_POST['rent'];
    $flat=$_POST['flat'];
    $aadhar=$_POST['aadhar'];
    $pan=$_POST['pan'];
    $fdetails=$_FILES['fdetails']['name'];
    $bdetails=$_FILES['bdetails']['name'];
    $fdetails_t=$_FILES['fdetails']['tmp_name'];
    $bdetails_t=$_FILES['bdetails']['tmp_name'];


$folder="Details /".$fdetails;
move_uploaded_file($fdetails_t,$folder);

$folder1="Details /".$bdetails;
move_uploaded_file($bdetails_t,$folder);
if($owner_password = $owner_cpassword){

    $sql="insert into `users` (`name`,`email`,`phone`,`password`,`cpassword`,`building_name`,`building_no`,`floor`,`rent`,`flat`,`aadhar`,`pan`,`fdetails`,`bdetails`) values ('$owner_name','$owner_email','$owner_phone','$owner_password','$owner_cpassword','$building_name','$building_no','$flour','$rent','$flat','$aadhar','$pan','$fdetails','$bdetails') ";
    $result=mysqli_query($conn,$sql);
    if($result){
    
        echo ' <div class="alert alert-success" role="alert">
       Successfully Added Visit <a href="index.php">Home</a>
       </div>';
    
    }
    else{
       echo ' <div class="alert alert-danger" role="alert">
       Something Went Wrong
      </div>';
    }
}


else{
    echo ' <div class="alert alert-danger" role="alert">
    Password Did Not Match.
   </div>';
}


}



?>

                <!-- PHP CODE FOR REG -->



                <form action="<?php echo $_SERVER['REQUEST_URI'] ?>" class="my-4 mr-4 ml-4" method="post"
                    enctype="multipart/form-data">
                    <div class="form-group">

                        <input type="text" name="name" placeholder="Owner Name" class="form-control" id="">


                    </div>

                    <div class="form-group">

                        <input type="email" name="email" placeholder="Owner Email" class="form-control" id="">


                    </div>
                    <div class="form-group">

                        <input type="number" name="phone" placeholder="Owner Phone Number" class="form-control" id="">


                    </div>
                    <div class="form-group">

                        <input type="text" name="password" placeholder="Password" class="form-control" id="">


                    </div>


                    <div class="form-group">

                        <input type="password" name="cpassword" placeholder="Confirm Your Password" class="form-control"
                            id="">


                    </div>

                    <div class="form-group">

                        <input type="text" name="building_name" placeholder="Building Name" class="form-control" id="">


                    </div>
                    <?php 

$build_id="SOCMANSYS" + mt_rand(1000,9999);

?>

                    <div class="form-group">

                        <input type="number" name="building_no" value="<?php echo $build_id; ?>"
                            placeholder="Building Number" class="form-control" id="">


                    </div>

                    <div class="form-group">

                        <input type="number" name="floor" placeholder="Number Of Floor In Building" class="form-control"
                            id="">


                    </div>

                    <div class="form-group">

                        <select name="rent" class="form-control" id="">
                            <option value="">---Building For Rent---</option>
                            <option value="yes">YES</option>
                            <option value="no">NO</option>
                        </select>


                    </div>


                    <div class="form-group">
                        <select name="flat" class="form-control" id="">
                            <option value="">---Flat---</option>
                            <option value="1BHK">1BHK</option>
                            <option value="2BHK">2BHK</option>
                            <option value="3BHK">3BHK</option>
                            <option value="4BHK">4BHK</option>
                            <option value="5BHK">Any You Want</option>
                        </select>

                    </div>
                    <div class="form-group">

                        <input type="number" name="aadhar" placeholder="Aadhar Number" class="form-control" id="">


                    </div>
                    <div class="form-group">

                        <input type="text" name="pan" placeholder="PAN Number" class="form-control" id="">


                    </div>

                    <div class="form-group">

                        <input type="file" name="fdetails" placeholder="Aadhar/Driving /PAN Front Image"
                            class="form-control" id="">


                    </div>


                    <div class="form-group">

                        <input type="file" name="bdetails" placeholder="Aadhar/Driving /PAN Back Image"
                            class="form-control" id="">


                    </div>
                    <div class="d-flex justify-content-between">
                        <div class="form-group">

                            <button type="submit" class="btn btn-outline-success my-4 form-control">Register</button>


                        </div>

                        <div class="form-group">

                            <button type="reset" class="btn btn-outline-success my-4 form-control">Reset</button>


                        </div>
                    </div>
                </form>

            </div>




            <div class="card-footer">


            </div>


        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"
        integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"
        integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
</body>

</html>