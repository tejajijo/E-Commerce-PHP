<?php
session_start();
include('connect.php');
$uname=$_SESSION['uname'];
$sql="SELECT * FROM admin";
$run=mysqli_query($con,$sql);
?>

<!DOCTYPE html>
<html>
<head>

	<link rel="icon"  href="ic.png">
	<title>ADMIN PANEL</title>
<link rel="stylesheet" type="text/css" href="userview.css">
<style type="text/css">
	table , th , td{
		
		text-align: center;
		padding: 12px 16px
	}
	h2{
		color: midnightblue;
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
</style>
</head>
<body>
	
	<img src="logo\avatar1.png" height="30" width="30"> <?php echo "ADMIN :";?> <?php echo $uname;?>
	<div class="navbar">
		<a href="admin.php">Home</a>
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
  			 <form method="post">
  		<input type="submit" name="logout" value="logout">
  	</form>
	</div>

  <h2><center>Admin list</center></h2>
  <hr>
  <table   align="center" width="90%">
  	<tr>
  		<th>S_NO</th> 
  		<th>ADMIN NAME</th> 
  		<th>ADMIN PASSWORD</th>
  		
  	</tr>
  	<?php
  		$sn=1;
  		while($row=mysqli_fetch_array($run)){
  			echo"<tr><td>".$sn++.
  				"</td><td>".$row['aname'].
  				"</td><td>".$row['apswd'].
  				"</td></tr>";
  		}
  	?>
  </table>

</body>
</html>
<?php
	if(isset($_POST['logout'])){
		session_destroy();
		header('location:login.php');
	}
?>