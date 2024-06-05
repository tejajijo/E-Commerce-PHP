<?php
session_start();
$uname=$_SESSION['uname'];
include('connect.php');
$ename=$_POST['srch'];
$search="SELECT * FROM employee WHERE CONCAT(eid,ename,edes,econtact) like '%".$ename."%'";
  $run=mysqli_query($con,$search);
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
	<form method="post" action="employeesearch.php" >
	<div class="search">
     <input type="text" name="srch" placeholder =" search" > <input type="submit" name="search" value="search">
     </div>
     </form>
      <h2 align=center> Employee</h2>
      <hr>
      <table  align=center border=1 cellpadding=10%>
   <?php
  if(mysqli_num_rows($run)==0){
          echo'<center>No employees found</center>';
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
