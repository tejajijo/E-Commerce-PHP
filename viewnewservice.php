<?php
include('connect.php');
session_start();
$uname=$_SESSION['uname'];
if(isset($_POST['testupdate'])){
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
        
    }
}


?>



<html>
    <head>
    
	<link rel="icon"  href="ic.png">
	<title>ADMIN PANEL</title>
       <link rel="stylesheet" type="text/css" href="service.css">
         <style type="text/css">
        
   
    </style>
        
    </head>
<body>

    <div class="main">
        <h2>UPDATE STATUS</h2>
        <hr>
          <table cellpadding="10%"> 
              <form method="post" >
              
                     <tr>
            <th>SERVICE ID<th>
                    <td><input type="text" name="sid" value="<?php echo $sid?>"></td>
                </tr>
                  <tr>
                <th>USERNAME<th>
                    <td><input type="text" name="uname" value="<?php echo $uuname?>"></td>
                      
                </tr>
                <th>SERVICE TYPE<th>
                    <td><input type="text" name="stype" value="<?php echo $stype?>"></td>
              <tr>
                   
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
                  <td>
                      <div class="option">
                      <select name="ename">
                        <?php
                       $select="SELECT ename FROM employee WHERE edes='mechanic'";
                     $runn=mysqli_query($con,$select);
               while($rows=mysqli_fetch_array($runn)){
                  echo '  <option>----SELECT EMPLOYEE----</option>
                          <option>nill</option>
                     <option value="'.$rows['ename'].'"> '.$rows['ename'].'</option>';
                     }
                     ?>
                      </select>
                            </div>
                          </td>
                </tr>
              <tr>
                <th>STATUS</th>
                 <td>
                     <div class="select">
                     <select name="status">
                     <option>----SELECT STATUS----</option>
                     <option value="approved">APPROVED</option>
                     <option value="not approved">NOT APPROVED</option>
                     </select>
                     </div>
                 </td>
            </tr>
            
              <tr>
                <td> <input type="submit" name="update" value="UPDATE" ></td>
            </tr>
           </form>
        </table>
    </div>
    </body>
</html>

  <?php

   if(isset($_POST['update']))
   {
    $sid=$_POST['sid'];
    $uname=$_POST['uname'];
    $stype=$_POST['stype'];
    $bname=$_POST['bname'];
    $vno=$_POST['vno'];
    $date=$_POST['date'];
    $time=$_POST['time'];
    $ename=$_POST['ename'];
    $status=$_POST['status'];
    
    $update="UPDATE service SET sid='$sid',uname='$uname', stype='$stype',bname='$bname',vno='$vno',date='$date',time='$time',ename='$ename',status='$status' WHERE sid='".$sid."'";
    
    $res=mysqli_query($con,$update);
       
    if($res){
        
        header('location:newservice.php');
    }
    else
        echo "OOPS!! not updated";
}


?>

<?php include('sidebar.php')?>





