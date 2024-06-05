<?php
session_start();
$uname=$_SESSION['uname'];
include('connect.php');
?>


<!DOCTYPE html>
<html>
<head>
	<link rel="icon"  href="ic.png">
	<title>ROYAL BAJAJ</title>
	<link rel="stylesheet" type="text/css" href="user.css">
</head>
<body>
	<form>
	<div class="navbar">
		<img src="logo\logo.png" height="9%" width="10%"><?php echo'Welcome'?>
  <?php echo $uname;?> 
 	<div class="dropdown">
    <button class="dropbtn">more 
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="testdrivebooking.php">Test drive booking</a>
      <a href="servicebooking.php">Service booking</a>
       <a href="bajaj.html">logout</a>
    </div>
  </div> 
  <a href="#"><img src="logo\msg.png" width="30" height="20"> adimalyroral@gmail.com |</a>
  <a href="#"><img src="logo\phn.png"width="40" height="20" >Customer care: +91 9188082932 |</a>
   <a href="brands.php"><img src="logo\bike.png"width="50" height="20"> brands |</a>
</div>
<img src="img\h.png" width="100%" height="90%">
</form>
<script src="dropdownvalidation.jss"></script>
</body>
</html>

<?php
if(isset($_POST['logout'])){
  session_start();
  session_destroy();
  header("location:bajaj.html");
  exit();
}
?>