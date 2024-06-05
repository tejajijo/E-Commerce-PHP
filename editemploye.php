<?php
session_start();
$uname=$_SESSION['uname'];
include('connect.php');
$sql="SELECT * FROM employee";
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
  	<tr>
        
  		<th>S_NO</th> 
        <th>EMPLOYEE ID</th> 
  		<th>EMPLOYEE NAME</th> 
  		<th>EMPLOYEE DESIGNATION</th>
      <th>CONTACT</th>
         <th>UPDATE</th>
         <th>DELETE</th>
      
  	</tr>
  	<?php
  		$sn=1;
  		while($row=mysqli_fetch_array($run)){
  			echo '<tr>';
            echo '<td>' .$sn++. '</td>';
             echo '<td>' .$row['eid']. '</td>';
             echo '<td>' .$row['ename']. '</td>';
             echo '<td>' .$row['edes']. '</td>';
            echo '<td>' .$row['econtact']. '</td>';
             echo '<td>';
            echo '<form method=post action="employeedit.php">
                  <input type=hidden name=eid value='.$row['eid'].'>';
            echo '<input type=submit name=edit value=edit>';
            echo '</form>';
            echo '</td>';
             echo '<td>';
            echo '<form method=post >
                     <input type=hidden name=eid value='.$row['eid'].'>';
            echo'<input type=submit name=delete value=delete>';
            echo'</td>';
            echo '</form>';
            echo '</tr>';
  		}
  	?>
  </table>
    </div>
   </body>
   </html>
<?php
     include('sidebar.php');

include('employedelete.php');


?>