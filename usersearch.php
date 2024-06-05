<?php
session_start();
$uname=$_SESSION['uname'];
include('connect.php');
if(isset($_POST['search'])){
	$sname=$_POST['srch'];
	$search="SELECT * FROM signin WHERE CONCAT(fname,lname,age,l_no,email,contact,uname) like '%".$sname."%'";
	$run=mysqli_query($con,$search);
}
	?>
<!DOCTYPE html>
<html>
<head>
	<link rel="icon"  href="ic.png">
	<title>ADMIN PANEL</title>
<link rel="stylesheet" type="text/css" href="viewproduct.css">
</head>
<body>
	<div class="main">
	<form method="post" action="usersearch.php">
	<div class="search">
     <input type="text" name="srch" placeholder ="   search" > <input type="submit" name="search" value="Find">
     </div>
     </form>
        <h2 align=center>Registered users</h2>
        <hr>
	<table width=80% align=center>
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

<?php include("sidebar.php")?>

