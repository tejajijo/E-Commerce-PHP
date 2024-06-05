<?php
session_start();
$uname=$_SESSION['uname'];
include('connect.php');
?>
<!DOCTYPE html>
<html>
<head>
	<link rel="icon"  href="ic.png">
	<title>ADMIN PANEL</title>
<link rel="stylesheet" type="text/css" href="userview.css">
<style type="text/css">
	.navbar a{
		padding: 20px 120px;
	}
	table , th , td{
    
    text-align: center;
    padding: 12px 16px
  }
  h2{
    color: midnightblue;
    margin-left: 15%;
  }
   th{
    background-color: midnightblue;
    color: white;
    font-size: 80%;
  }

  tr :hover{
    background-color:lightgrey;
  }
  tr:nth-child(even){
    background-color: lightgrey;
  }

  p{
    text-align: center;
    color: lightgrey;
  }

  .sh {

 	float: right; 
 	margin-top: 2%;
  }

  .sh input[type="text"]{
  	height: 24px;
  	border-radius: 10px;
  	border :1px solid lightgrey;
  }

  .sh input[type="submit"]{
  	background-color: lightgrey;
  	color: white;
  	border: none;
  	padding: 7px;
  	width: 60px;
  	border-radius: 10px;
  }

   .sh input:hover[type="submit"]{
   	background-color: midnightblue;
   }

   body {
  font-family: "Lato", sans-serif;
}

.sidenav {
  height: 100%;
  width: 0;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: lightgrey;
  overflow-x: hidden;
  transition: 0.5s;
  padding-top: 60px;
}

.sidenav a {
  margin-top: 40%;
  padding: 8px 8px 8px 32px;
  text-decoration: none;
  font-size: 25px;
  color: white;
  display: block;
  transition: 0.3s;
}

.sidenav a:hover {
  color: midnightblue;
}

.sidenav .closebtn {
  position: absolute;
  top: 0;
  right: 25px;
  font-size: 36px;
  margin-left: 50px;
}

@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}

</style>
</head>
<body>
	
	<img src="logo\avatar1.png" height="30" width="30"> <?php echo "ADMIN :";?> <?php echo $uname;?>
	<div class="navbar">
		<a href="admin.php">Home</a>
  		<a href="userview2.php">Users</a>
  		<a href=""> Product</a>
  		<a href="employee.php">Employee</a>
  			<div class="dropdown">
   		 <button class="dropbtn">Bookings
      	<i class="fa fa-caret-down"></i>
    	</button>
    			<div class="dropdown-content">
     				 <a href="#">TestDrive Booking</a>
     				 <a href="#">Service Booking</a>
    			</div>
  			</div>
  			 <form method="post">
  		<input type="submit" name="logout" value="logout">
  	</form>
	</div>


	<form method="post" action="usersearch.php">
	<div class="sh">
     <input type="text" name="srch" placeholder ="   search" > <input type="submit" name="search" value="Find">
     </div>
     </form>

  <div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <a href="employeeadd.php">Add employee Details</a>
  <a href="#">Update employee details </a>
  <a href="#">Delete Employee</a>
  <a href="employeview.php">View Employee details</a>

</div>
<span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776;</span>

<script >
  function openNav() {
  document.getElementById("mySidenav").style.width = "250px";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
}
</script>


   </body>
   </html>

   <?php
  if(isset($_POST['logout'])){
    session_destroy();
    header('location:login.php');
  }
?>