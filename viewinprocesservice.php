<?php
include('connect.php');
session_start();
$uname=$_SESSION['uname'];
if(isset($_POST['serviceupdate'])){
    $sid=$_POST['sid'];
    $query="SELECT * FROM service where sid='".$sid."'";
    $run=mysqli_query($con,$query);
    while($row=mysqli_fetch_array($run)){
        
        $sid=$row['sid'];
        $uuname=$row['uname'];
        $stype=$row['stype'];
        $bname=$row['bname'];
        $vno=$row['vno'];
        $date=$row['date'];
        $time=$row['time'];
        $ename=$row['ename'];
         $status=$row['status'];
        $status2=$row['status2'];
    }
}
?>



<html>
    <head>
    
	<link rel="icon"  href="ic.png">
	<title>ADMIN PANEL</title>
       <link rel="stylesheet" type="text/css" href="service.css"> 
    </head>
<body>

    <div class="main">
        <h2>UPDATE STATUS</h2>
        <hr>
        <form method="post" >
          <table cellpadding="10%"> 
                      <tr>
            <th>SERVICE ID<th>
                    <td><input type="text" name="sid" value="<?php echo $sid?>"></td>
                </tr>
                  <tr>
                <th>USERNAME<th>
                    <td><input type="text" name="uname" value="<?php echo $uuname?>"></td>
                </tr>
                
              <tr>
                <th>SERVICE TYPE<th>
                    <td><input type="text" name="stype" value="<?php echo $stype?>"></td>
                </tr>
                 <tr>
                <th>BIKE NAME<th>
                    <td><input type="text" name="bname" value="<?php echo $bname?>" ></td>
                </tr>
                 <tr>
                <th>VEHICLE NUMBER<th>
                    <td><input type="text" name="vno" value="<?php echo $vno?>" ></td>
                </tr>
                <tr>
                <th>BOOKING DATE<th>
                     <td><input type="date" name="date" value="<?php echo $date?>"></td>
                </tr>
                 <tr>
                <th>BOOKING TIME<th>
                     <td><input type="time" name="time" value="<?php echo $time?>"></td>
                </tr>
              <tr>
              <th>EMPLOYEE NAME<th>
                  <td><input type="text" name="ename" value="<?php echo $ename?>"></td>
                </tr>
             <tr>
              <th>STATUS<th>
                  <td><input type="text" name="ename" value="<?php echo $status?>"></td>
                </tr>
                  
              <tr>
                  <th>STATUS2</th>
                  <td>
                      <div class="select">
                      <select name="status2">
                      <option></option>
                      <option value="done">Done</option>
                      <option value="not done">Not done</option>
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
     $sid=$_POST['sid'];
    $uuname=$_POST['uname'];
    $stype=$_POST['stype'];
    $bname=$_POST['bname'];
    $vno=$_POST['vno'];
    $date=$_POST['date'];
    $time=$_POST['time'];
    $ename=$_POST['ename'];
    $status=$_POST['status'];
    $status2=$_POST['status2'];
    
    $update="UPDATE service SET sid='$sid',uname='$uuname', stype='$stype',bname='$bname',vno='$vno',date='$date',time='$time',ename='$ename',status='$status',status2='$status2' WHERE sid='".$sid."'";
    
    $run=mysqli_query($con,$update);
    if($run){
        
       header('location:inprocesservice.php');
    }
    else
        echo "OOPS!! not updated";
}

                        

?>

<?php include('sidebar.php')?>






