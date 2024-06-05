<?php
session_start();
include('connect.php');
$uname=$_SESSION['uname'];
$status="not approved";
$sql="SELECT * FROM testdrive INNER JOIN signin ON testdrive.uname=signin.uname WHERE testdrive.status='".$status."'";
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
            <div class="search">
	<form method="post" action="notacceptsearch.php">
     <input type="text" name="srch" placeholder =" search" > <input type="submit" name="search" value="search">
     </form>
            </div>

  <h2><center>NOT ACCEPTED BOOKINGS</center></h2>
  <hr>		
  	<table border="1"  align="center" width="90%" align="center " cellpadding="15%">
            <?php
  	if(mysqli_num_rows($run)==0){
            echo '<center>No bookings found</center>';
        }
        else{
  	          echo'  <tr>
                 <th>SNO</th>
                 <th>BOOKED DATE</th> 
              <th>BOOKED TIME</th>
              <th>TEST ID</th>
           <th>USER NAME</th>
           <th>EMAIL</th>
           <th>CONTACT</th>
  		    <th>BIKE MODEL</th> 
  		     <th>DATE</th> 
              <th>TIME</th>
            <th>STATUS</th>
            </tr>';
        
           
  		$sno=1;
        while($row=mysqli_fetch_array($run)){
  			echo '<tr>';
            echo '<td>' .$sno++. '</td>';
            echo '<td>' .$row['bdate']. '</td>';
             echo '<td>' .$row['btime']. '</td>';
             echo '<td>' .$row['tid']. '</td>';
            echo '<td>' .$row['uname']. '</td>';
             echo '<td>' .$row['email']. '</td>';
            echo '<td>' .$row['contact']. '</td>';
            echo '<td>' .$row['pname']. '</td>';
             echo '<td>' .$row['date']. '</td>';
             echo '<td>' .$row['time']. '</td>';
             echo '<td>'.$row['status'].'</td>';
            
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