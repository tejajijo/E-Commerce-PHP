<?php
session_start();
$uname=$_SESSION['uname'];
include('connect.php');
$uname=$_POST['srch'];
$status="approved";
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
	<form method="post" action="acceptsearch.php" >
	<div class="search">
     <input type="text" name="srch" placeholder =" search" > <input type="submit" name="search" value="search">
     </div>
     </form>
   <h2 align=center> ACCEPTED BOOKINGS</h2>
  <hr>
      <table  align=center cellpadding=10% width=100%>
  <?php
      if(mysqli_num_rows($run)==0){
          echo'<center>no results found<center>';
      }
          
      else{      
     echo'
      <tr>
      <th>TEST ID</th>
      <th>BOOKED DATE</th>
      <th>BOOKED TIME</th>
      <th>USER NAME</th>
      <th>EMAIL</th>
      <th>CONTACT</th>
     <th>BIKE MODEL</th>
      <th>DATE</th>
     <th>TIME</th>
     <th>STATUS</th>
      </tr>';
     
    while($row=mysqli_fetch_assoc($run))
        {
        echo "<tr><td>".$row['tid'].
                 "</td><td>".$row['bdate'].
            "</td><td>".$row['btime'].
            "</td><td>".$row['uname'].
            "</td><td>".$row['pname'].
            "</td><td>".$row['email'].
            "</td><td>".$row['contact'].
                  "</td><td>".$row['date'].
            "</td><td>".$row['time'].
            "</td><td>".$row['status'].
                   "</td></tr>";
        
      
          } 
           }

      ?>
         
      </table>
    </div>
       </body>
   </html>
<?php include('sidebar.php')?>
