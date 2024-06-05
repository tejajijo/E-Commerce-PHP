<?php
session_start();
include('connect.php');
$uname=$_SESSION['uname'];
if(isset($_POST['search'])){
$sname=$_POST['srch'];
$status="approved";
$search="SELECT * FROM service INNER JOIN signin ON service.uname=signin.uname WHERE CONCAT(service.sid,service.uname,signin.email,signin.contact,service.stype,service.bname,service.vno,service.date,service.time,service.status) like '%".$sname."%' AND service.status= '".$status."'";
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
   
    <div  class="main">
           <div class="search">
	<form method="post" action="acceptservicesearch.php">
     <input type="text" name="srch" placeholder =" search" > <input type="submit" name="search" value="search">
     </form>
            </div>

  <h2><center>ACCEPTED BOOKINGS</center></h2>
  <hr>		
  	
         <table border="1"  align="center" width="100%" align="center " cellpadding="15%">
            <?php
             if(mysqli_num_rows($run)==0){
                 
                 echo'<center> no  bookings found</center>';
             }
   else{          
  echo'	<tr>
        <th>SNO</th>
        <th>BOOKED DATE</th>
        <th>BOOKED TME</th>
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
            
            echo '</tr>';
          
        }
   }
  	?>
             </table>

    </div>
</body>
</html>


<?php include('sidebar.php');

?>