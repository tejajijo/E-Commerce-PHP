<?php
session_start();
include('connect.php');
$uname=$_SESSION['uname'];
$sql="SELECT * FROM signin ORDER BY fname";
$run=mysqli_query($con,$sql);
?>

<!DOCTYPE html>
<html>
<head>

	<link rel="icon"  href="ic.png">
	<title>ADMIN PANEL</title>
     <link rel="stylesheet" type="text/css" href="viewproduct.css">
    </head>
<body>
   
    <div  class="main">
	<form method="post" action="usersearch.php" >
	<div class="search">
     <input type="text" name="srch" placeholder =" search" > <input type="submit" name="search" value="search">
     </div>
     </form>

  <h2><center>Registered Users</center></h2>
  <hr>
  <table border="1"  align="center" width="90%" align="center " cellpadding="15%">
      	<?php
      if(mysqli_num_rows($run)==0){
          echo'<center>NO users added</center>';
      }
      else{
  	echo'<tr>
        
  		<th>S_NO</th> 
  		<th>FIRST NAME</th> 
  		<th>LAST NAME</th>
      <th>AGE</th>
      <th>LICENSE NUMBER</th>
  		<th>EMAIL</th>
      <th>CONTACT</th>
  		<th>USER NAME</th>
  	</tr>';
  
  		$sn=1;
  		while($row=mysqli_fetch_array($run)){
  			echo"<tr><td>".$sn++.
  				"</td><td>".$row['fname'].
  				"</td><td>".$row['lname'].
          "</td><td>".$row['age'].
          "</td><td>".$row['l_no'].
  				"</td><td>".$row['email'].
          "</td><td>".$row['contact'].
  				"</td><td>".$row['uname'].
  				"</td></tr>";
  		}
          }
  	?>
  </table>
    </div>
</body>
</html>
<?php
	if(isset($_POST['logout'])){
		session_destroy();
		header('location:login.php');
	}
?>

 <?php include("sidebar.php")?>