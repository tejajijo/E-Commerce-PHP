<?php
include('connect.php');
session_start();
$uname=$_SESSION['uname'];
if(isset($_POST['testupdate'])){
    $tid=$_POST['tid'];
    $query="SELECT * FROM testdrive where tid='".$tid."'";
    $run=mysqli_query($con,$query);
    while($row=mysqli_fetch_array($run)){
        
        $tid=$row['tid'];
        $uuname=$row['uname'];
        $pname=$row['pname'];
        $date=$row['date'];
        $time=$row['time'];
        $status=$row['status'];
        $status2=$row['status2'];
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
                 <td><input type="text" name="status" value="<?php echo $status ?>"> </td>
            </tr>
              <tr>
                  <th>STATUS 2</th>
                <td>
                    <div class="select">
                    <select name="status2">
                      <option></option>
                      <option value="done">  DONE </option>
                       <option value="not done">  NOT DONE </option>
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
    $status2=$_POST['status2'];
    
    $query="UPDATE testdrive SET tid='$tid',uname='$uuname', pname='$pname',date='$date',time='$time',status='$status',status2='$status2'WHERE tid='".$tid."'";
    
    $run=mysqli_query($con,$query);
    if($run){
        
        header('location:inprocesstest.php');
    }
    else
        echo "OOPS!! not updated";
}

                        include('sidebar.php');

?>






