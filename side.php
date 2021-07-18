<nav class="navbar navbar-expand-lg navbar-light " id="navbar_back">
    
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
<ul id="myMenu">
<input type="text" id="mySearch" onkeyup="myFunction()" placeholder="Search.." title="Type in a category">
  <?php
include 'dbconn.php';
session_start();
if(isset($_SESSION['loggedin']) && $_SESSION['loggedin']=true){
$user_id=$_SESSION['slno'];
$sql="select * from `users` where `slno`='$user_id'";
$result=mysqli_query($conn ,$sql);
while($row=mysqli_fetch_assoc($result)){
  echo '<li><a href="logout.php"  style="color:red;">'.$row['name'].'{Logout}</a></li>
  <li><a href="add_rent_owner.php?building_no='.$row['building_no'].'">Add Flat For Rent</a></li>
  <li><a href="meeting_users.php">Meeting</a></li>
  <li><a href="complain_user.php">Complain</a></li>
  <li><a href="function_user_view.php">Upcoming Function</a></li>';

if($row['user']=='admin'){
  echo ' 
  <li><a href="admin.php">Admin</a></li>';
}

}


}



else{
  echo ' 
  <li><a href="register_room.php">Register</a></li>

  <li><a href="login.php">Login</a></li>';

}



?>

  <li><a href="buildings_users.php">Our Buildings</a></li>
  <li><a href="notice_user.php">Notice</a></li>
 
 
 
  <li><a href="job_user.php">Jobs Avaliable</a></li>
  <li><a href="all_rent_house.php">Flat/Building For Shell/Rent</a></li>
  
 
  
  
</ul>
    </div>
</nav>

<style>

/* Style the search box */
#mySearch {
  width: 100%;
  font-size: 18px;
  padding: 11px;
  border: 1px solid #ddd;
}

/* Style the navigation menu */
#myMenu {
  list-style-type: none;
  padding: 0;
  margin: 0;
}

/* Style the navigation links */
#myMenu li a {
  padding: 12px;
  text-decoration: none;
  color: black;
  display: block
}

#myMenu li a:hover {
  background-color: #eee;
}


</style>