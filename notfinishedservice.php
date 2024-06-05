<?php
session_start();
include('connect.php');
$uname=$_SESSION['uname'];
$status="approved";
$status2="not done";
$sql="SELECT * FROM service INNER JOIN signin ON service.uname=signin.uname WHERE service.status2='".$status2."'AND service.status='".$status."'";
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
        <form method="post" action="notfinishedservicesearch.php" >
	<div class="search">
     <input type="text" name="srch" placeholder =" search" > <input type="submit" name="search" value="search">
     </div>
     </form>

  <h2><center>NOT FINISHED BOOKINGS</center></h2>
  <hr>		
  	
         <table border="1"  align="center" width="90%" align="center " cellpadding="15%">
  	 <?php
             if(mysqli_num_rows($run)==0){
                 
                 echo'<center> no new bookings</center>';
             }
   else{          
   echo'	<tr>
        <th>SNO</th>
        	<th>BOOKED DATE</th> 
      <th>BOOKED TIME</th>
         <th>SERVICE ID</th>
        <th>USER NAME</th>
        <th>EMAIL</th>
        <th>CONTACT</th>
        <th>SERVICE TYPE</th>
  		<th>BIKE MODEL</th>
        <th>VEHICLE NUMBER</th>
  		<th>DATE</th> 
      <th>TIME</th>
        <th>EMPLOYEE NAME</th>
      <th>STATUS</th>
       <th>STATUS2</th>
      </tr>';
        
  		$sno=1;
  		while($row=mysqli_fetch_array($run)){
            
  			echo '<tr>';
            echo '<td>' .$sno++. '</td>';
            echo '<td>' .$row['bdate']. '</td>';
             echo '<td>' .$row['btime']. '</td>';
             echo '<td>' .$row['sid']. '</td>';
            echo '<td>' .$row['uname']. '</td>';
             echo '<td>' .$row['email']. '</td>';
            echo '<td>' .$row['contact']. '</td>';
            echo '<td>' .$row['stype']. '</td>';
            echo '<td>' .$row['bname']. '</td>';
            echo '<td>' .$row['vno']. '</td>';
             echo '<td>' .$row['date']. '</td>';
             echo '<td>' .$row['time']. '</td>';
            echo '<td>' .$row['ename']. '</td>';
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

<?php include('sidebar.php');

?>