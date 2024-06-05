<?php
include('connect.php');
session_start();
$uname=$_SESSION['uname'];
$tid=$_POST['tid'];
if(isset($_POST['testupdate'])){
    $query="SELECT * FROM testdrive where tid='".$tid."'";
    $run=mysqli_query($con,$query);
    while($row=mysqli_fetch_array($run)){
        
        $tid=$row['tid'];
        $uuname=$row['uname'];
        $pname=$row['pname'];
        $date=$row['date'];
        $time=$row['time'];
        $status=$row['status'];
    }
}
?>



<html>
    <head>
    
	<link rel="icon"  href="ic.png">
	<title>ADMIN PANEL</title>
   <link rel="stylesheet" type="text/css" href="addproduct.css">
    </head>
<body>

    <div class="main">
        <form method="post" >
          <table cellpadding="10%"> 
              
                     <tr>
            <th>TEST ID</th>
            
            <td> <input  name="tid" type="text" value="<?php echo $tid ?>"><br><br></td>
              </tr>
              <tr>
               <th>USER NAME</th>
           <td> <input  name="uname" type="text" value="<?php echo $uuname ?>"> <br><br></td>
              </tr>
        <tr>
            <th>BIKE MODEL</th>
           <td> <input  name="pname" type="text" value="<?php echo $pname ?>"> <br><br></td>
              </tr>
            
            <tr> 
                <th>DATE</th>
                <td>  <input type="date" name="date" value="<?php echo $date ?>"></td>
            </tr>
            
             <tr>
                <th>TIME</th>
                 <td> <input type="text" name="time" value="<?php echo $time ?>" ></td>
            </tr>
             <tr>
                <th>STATUS</th>
                 <td>
                     <div class="select">
                     <select name="status">
                     <option></option>
                     <option value="approved">APPROVED</option>
                     <option value="not approved">NOT APPROVED</option>
                     </select>
                     </div>
                 </td>
            </tr>
              <tr>
             
                <td> <input type="submit" name="update" value="UPDATE" ></td>
            </tr>
   
        </table>
       </form> 
    </div>
    </body>
</html>

  <?php

   if(isset($_POST['update']))
   {
    $tid=$_POST['tid'];
    $uuname=$_POST['uname'];  
    $pname=$_POST['pname'];
    $date=$_POST['date'];
    $time=$_POST['time'];
    $status=$_POST['status'];
    
    $query="UPDATE testdrive SET tid='$tid',uname='$uuname', pname='$pname',date='$date',time='$time',status='$status' WHERE tid='".$tid."'";
    
    $run=mysqli_query($con,$query);
    if($run){
        
        header('location:newtest.php');
    }
    else
        echo "OOPS!! not updated";
}


?>
    
<?php 
include('sidebar.php');
?>






