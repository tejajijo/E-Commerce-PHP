<?php
session_start();
include('connect.php');
$uname=$_SESSION['uname'];
$status="approved";
$status2="";
$sql="SELECT * FROM testdrive INNER JOIN signin ON testdrive.uname=signin.uname WHERE testdrive.uname='".$uname."' AND testdrive.status like'%".$status."%'AND testdrive.status2='".$status2."'";
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
        <h2><center>VIEW STATUS</center></h2>
        <hr>	
               <table border="1"  align="center" width="100%" align="center " cellpadding="15%">
                    <?php
  	if(mysqli_num_rows($run)==0){
            echo '<center>No  bookings found</center>';
        }
        else {
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
            <th></th>
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
            if($row['status']=="approved"){
             echo '<form method=post action="testpdf2.php">
               <td> <input type=hidden name=tid value='.$row['tid'].'> 
             <input type=submit name=getpdf value=getpdf></td>
             </form>
             </tr>';
            }
          
        }  
        }
         
  	?>
        </table>    

    </div>
</body>
</html>

<?php include('usersidebar.php');

?>