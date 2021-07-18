


<link href="https://fonts.googleapis.com/css2?family=Sansita+Swashed&display=swap" rel="stylesheet">








<nav class="navbar navbar-expand-lg navbar-light" style="background-color:#b1bfca;">
  <a class="navbar-brand" href="#" id="nav21"><b><i><span style="color:blue;">Society</span><span class="mx-2" style="color:gold;">Management</span><span class="mx-1" style="color:sandybrown;">System</span></i></b></a>
  <button class="navbar-toggler"  type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
        <a class="nav-link" id="nav2" href="index.php"><b>Home</b> </a>
      </li>
      <li class="nav-item" >
        <a class="nav-link" id="nav2" href="buildings_users.php"><b>Our Building</b></a>
      </li>
      <li class="nav-item">
        <a class="nav-link"  id="nav2" href="#"><b>Upcoming Functions</b></a>
      </li>
      <li class="nav-item">
        <a class="nav-link"  id="nav2" href="#"><b>Notice</b></a>
      </li>
     
      <?php
include 'dbconn.php';
session_start();
if(isset($_SESSION['loggedin']) && $_SESSION['loggedin']=true){
$user_id=$_SESSION['slno'];
$sql="select `name` from `users` where `slno`='$user_id'";
$result=mysqli_query($conn ,$sql);
while($row=mysqli_fetch_assoc($result)){
  echo '
  <li class="nav-item">
  <a class="nav-link"  id="nav2" href="#"><b>Meeting</b></a>
</li>
<li class="nav-item">
<a class="nav-link"  id="nav2" href="#"><b>Complain</b></a>
</li>
  <li class="nav-item">
  <a class="nav-link"  id="nav2" href="logout.php"><span style="color:red">{Logout('.$row['name'].')}</span><b></b></a>
</li>';
}


}
?>
      
    </ul>
  </div>
</nav>


<style>


#nav2{
    font-size: 20px;
    font-family: 'Sansita Swashed', cursive;
    
}
#nav21{
    font-size: 30px;
    font-family: 'Sansita Swashed', cursive;
    
}
</style>