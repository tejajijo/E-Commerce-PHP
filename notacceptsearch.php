<?php
session_start();
$uname=$_SESSION['uname'];
include('connect.php');
$uname=$_POST['srch'];
$status="not approved";
$search="SELECT * FROM testdrive INNER JOIN signin ON testdrive.uname=signin.uname WHERE CONCAT(testdrive.tid,testdrive.uname,signin.email,signin.contact,testdrive.pname,testdrive.date,testdrive.time,testdrive.bdate,testdrive.btime,testdrive.status) like '%".$uname."%' AND testdrive.status= '".$status."'";
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
	<form method="post" action="notacceptsearch.php">
	<div class="search">
     <input type="text" name="srch" placeholder =" search"> <input type="submit" name="search" value="search">
     </div>
     </form>
  <h2 align=center>NOT ACCEPTED BOOKINGS</h2>
      <hr>
      <table  align=center  cellpadding=10% width=100%>
          
         <?php
  	if(mysqli_num_rows($run)==0){
            echo '<center>No  bookings found</center>';
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

<?php include('sidebar.php')?>
