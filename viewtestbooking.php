<?php
session_start();
include('connect.php');
$uname=$_SESSION['uname'];
$status="approved";
$status2="done";
$sql="SELECT * FROM testdrive where uname='".$uname."' AND status like'%".$status."%' OR status2 like '%".$status2."%'";
$run=mysqli_query($con,$sql);
?>

<!DOCTYPE html>
<html>
<head>

	<link rel="icon"  href="ic.png">
	<title>TEST DRIVE BOOKING</title>
    <link rel="stylesheet" type="text/css" href="viewproduct.css">
    </head>
<body>
   
    <div  class="main">

  <h2><center>YOUR BOOKINGS</center></h2>
  <hr>		
  	
         <table border="1"  align="center" width="90%" align="center " cellpadding="15%">
   <?php
  	if(mysqli_num_rows($run)==0){
            echo '<center>No bookings made</center>';
        }
             
        else{
  	          echo'  <tr>
                 <th>SNO</th>
  		    <th>BIKE MODEL</th> 
            <th>BOOKED DATE</th>
            <th>BOOKED TIME</th>
  		     <th>DATE</th> 
              <th>TIME</th>
            <th>STATUS</th>
            <th>STATUS2</th>

            </tr>';
        
           
  		$sno=1;
        while($row=mysqli_fetch_array($run)){
  			echo '<tr>';
            echo '<td>' .$sno++. '</td>';
            echo '<td>' .$row['pname']. '</td>';
            echo '<td>' .$row['bdate']. '</td>';
            echo '<td>' .$row['btime']. '</td>';
             echo '<td>' .$row['date']. '</td>';
             echo '<td>' .$row['time']. '</td>';
             echo '<td>'.$row['status'].'</td>';
             echo '<td>'.$row['status2'].'</td>';
            echo '</tr>';
          
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

<?php include('usersidebar.php');

?>