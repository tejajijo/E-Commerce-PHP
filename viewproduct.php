<?php
session_start();
include('connect.php');
$uname=$_SESSION['uname'];
$sql="SELECT * FROM product";
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
         
       <h2> PRODUCT LIST</h2>
        <div class="search">
	<form method="post" action="productsearch.php">
     <input type="text" name="srch" placeholder =" search" > <input type="submit" name="search" value="search">
     </form>
            </div>
  <hr>
  <table align="center" width="90%" align="center " cellpadding="15%" cellspacing="10%">
      <?php
      if(mysqli_num_rows($run)==0){
          echo '<center>no products added</center>';
      }
      else{
  echo'	<tr>
        
  		<th>PRODUCT ID</th> 
  		<th>PRODUCT</th> 
      <th>NAME</th>
      <th>MILEAGE</th>
  		<th>ENGINE DISPLACEMENT</th>
        <th>POWER</th>
        <th>No OF CYLINDERS</th>
        <th>FUELTYPE</th>
        <th>GEAR</th>
        <th>TORQUE</th>
        <th>TOP SPEED</th>
        <th>WEIGHT</th>
        <th>YEAR OF MANUFACTURE</th>
         <th>EDIT</th>
         <th>DELETE</th>
  	</tr>';
  	
  		
  		while($row=mysqli_fetch_array($run)){
            
  			echo '<tr>';
            echo '<td>' .$row['pid']. '</td>';
            echo '<td>' ;
            echo '<img src="data:image/jpg;base64,'.base64_encode($row['pimg']).'" height="100" width="100"/>';
            echo'</td>';
             echo '<td>' .$row['pname']. '</td>';
             echo '<td>' .$row['mileage']. '</td>';
             echo '<td>' .$row['disp']. '</td>';
            echo '<td>' .$row['power']. '</td>';
            echo '<td>' .$row['cylinders']. '</td>';
            echo '<td>' .$row['fueltype']. '</td>';
            echo '<td>' .$row['gear']. '</td>';
            echo '<td>' .$row['torque']. '</td>';
             echo '<td>' .$row['speed']. '</td>';
             echo '<td>' .$row['weight']. '</td>';
             echo '<td>' .$row['manufacture']. '</td>';
             echo '<td>';
            echo '<form method=post action="edit.php">
                  <input type=hidden name=pid value='.$row['pid'].'>';
            echo '<input type=submit name=edit value=edit>';
            echo '</form>';
            echo '</td>';
             echo '<td>';
            echo '<form method=post >
                     <input type=hidden name=pid value='.$row['pid'].'>';
            echo'<input type=submit name=delete value=delete>';
            echo'</td>';
            echo '</form>';
            echo '</tr>';
  		}
      }
    
  	?>
  </table>
    </div>
</body>
</html>


<?php include('sidebar.php');
include('delete.php');
?>