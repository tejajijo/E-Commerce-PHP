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

  h2{
    margin-left: 40%;
    color: midnightblue;
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

table{
  margin-top: 5%;
  text-align: center;
}
.box input[type="text"]{
  border-radius: 7px;
      height: 25px;
      text-align: center;
      width: 220px;
      border:solid;
      border-color: lightgrey;
}

.box input[type="number"]{
  border-radius: 7px;
      height: 25px;
      text-align: center;
      width: 220px;
      border:solid;
      border-color: lightgrey;
}

.box input[type="submit"]{
      margin-left: 2px;
      width: 220px;
      height: 30px;
      background-color: midnightblue;
      letter-spacing: 3px;
      font-family: serif;
      color: white;
      border:none;
    }

    p{
      color: darkgreen;
      text-align: center;

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


  <div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <a href="employeeadd.php">Add employee Details</a>
  <a href="#">Update employee details </a>
  <a href="#">Delete Employee</a>
  <a href="employeview.php">View Employee details</a>

</div>
<span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776;</span>
  <h2>Employee details form</h2>
  <hr>
    <div class="box">
<form method="post">
  <table align="center" width="50%" cellpadding="10">
    <tr>
     <td>
       <input type="number" name="eid" placeholder="Employee ID">
     </td>
   </tr>

    <tr>
     <td>
       <input type="text" name="ename" placeholder="Employee name">
     </td>
   </tr>
   <tr>
     <td>
       <input type="text" name="edes" placeholder="Employee designation">
     </td>
   </tr>
   <tr>
     <td>
       <input type="number" name="econtact" placeholder="Employee contact number">
     </td>

   </tr>
   <tr>
      <td>
        <input type="submit" name="insert" value="INSERT">
      </td>
   </tr>
  </table>
</form>
</div>




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
    if(isset($_POST['insert'])){

$eid=$_POST['eid'];
$ename=$_POST['ename'];
$edes=$_POST['edes'];
$econtact=$_POST['econtact'];

$insert="INSERT INTO employee (eid,ename,edes,econtact) VALUES('$eid','$ename','$edes','$econtact')";
$sql=mysqli_query($con,$insert);

if(!$sql)
  echo '<center><b> Oops something went wrong !!</b></center>';

else
  echo "<p>*Successfully inserted<p>";

}
?>

<?php
  if(isset($_POST['logout'])){
    session_destroy();
    header('location:login.php');
  }
?>