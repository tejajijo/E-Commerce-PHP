<?php
session_start();
include('connect.php');
$uname=$_SESSION['uname'];
?>

<!DOCTYPE html>
<html>
<head>

	<link rel="icon"  href="ic.png">
	<title>ADMIN PANEL</title>
	<style type="text/css">
		body {
  font-family: Arial, Helvetica, sans-serif;
}

.navbar {
  overflow: hidden;
  background-color: lightgrey;
}

.navbar a {
  float: left;
  font-size: 18px;
  color: white;
  text-align: center;
  padding: 20px 55px;
  text-decoration: none;
}

.dropdown {
  float: left;
  overflow: hidden;
}

.dropdown .dropbtn {
  font-size: 18px;  
  border: none;
  outline: none;
  color: white;
  padding: 14px 16px;
  background-color: inherit;
  font-family: inherit;
  margin: 5;
  margin-top: 5%;
}

.navbar a:hover, .dropdown:hover .dropbtn {
  background-color: midnightblue;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: lightgrey;
  min-width: 160px;
  overflow: auto;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;

}

.dropdown-content a {
  float: none;
  color: white;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: left;
}

.dropdown-content a:hover {
  background-color: midnightblue;
}

.dropdown:hover .dropdown-content {
  display: block;
}
	</style>
</head>
<body>
	<img src="logo\avatar1.png" height="30" width="30">    <?php echo "WELCOME ";?><?php echo $uname;?>
	<div class="navbar">
		<a href="#home">Home</a>
  		<a href="userview2.php">User view</a>
  		<a href="adminview.php">View Admins</a>
  		<a href="">Edit Admins</a>
  		<a href="">Add Product</a>
  		<a href="">View Product</a>
  			<div class="dropdown">
   		 <button class="dropbtn">View Bookings
      	<i class="fa fa-caret-down"></i>
    	</button>
    			<div class="dropdown-content">
     				 <a href="#">TestDrive Booking</a>
     				 <a href="#">Service Booking</a>
    			</div>
  			</div> 
  		<a href="#news">Logout</a>
	</div>
</body>
</html>
