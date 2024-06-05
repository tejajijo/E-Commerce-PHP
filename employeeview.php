<?php
session_start();
$uname=$_SESSION['uname'];
include('connect.php');
$sql="SELECT * FROM employee ORDER BY ename ";
$run=mysqli_query($con,$sql);
?>
<!DOCTYPE html>
<html>
<head>
	<link rel="icon"  href="ic.png">
	<title>ADMIN PANEL</title>
<link rel="stylesheet" type="text/css" href="">
    <link rel="stylesheet" type="text/css" href="viewproduct.css">

 
</head>
<body>
	<div  class="main">
	<form method="post" action="employeesearch.php" >
	<div class="search">
     <input type="text" name="srch" placeholder =" search" > <input type="submit" name="search" value="search">
     </div>
     </form>

  <h2><center>EMPLOYEES</center></h2>
  <hr>
  <table border="1"  align="center" width="90%" align="center " cellpadding="15%">
      <?php
      if(mysqli_num_rows($run)==0){
          echo'<center>NO employees added</center>';
      }
      else{
  echo'	<tr>
        
  		<th>S_NO</th> 
        <th>EMPLOYEE ID</th> 
  		<th>EMPLOYEE NAME</th> 
  		<th>EMPLOYEE DESIGNATION</th>
      <th>CONTACT</th>
      
  	</tr>';
  	
  		$sn=1;
  		while($row=mysqli_fetch_array($run)){
  			echo"<tr><td>".$sn++.
  				"</td><td>".$row['eid'].
  				"</td><td>".$row['ename'].
          "</td><td>".$row['edes'].
          "</td><td>".$row['econtact'].
  				"</td></tr>";
  		}
      }
  	?>
  </table>
    </div>
   </body>
   </html>
    <?php include('sidebar.php')?>