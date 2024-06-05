 <?php

   if(isset($_POST['update']))
   {
    $pid=$_POST['pid'];
    $pname=$_POST['pname'];
    $mileage=$_POST['mileage'];
    $displacement=$_POST['displacement'];
    $power=$_POST['power'];
    $cylinders=$_POST['cylinders'];
    $fueltype=$_POST['fueltype'];
    $gear=$_POST['gear'];
    $torque=$_POST['torque'];
    $speed=$_POST['speed'];
    $weight=$_POST['weight'];
    $manufacture=$_POST['manufacture'];
       
    
    $query="UPDATE product SET pid='$pid',pname='$pname',mileage='$mileage',disp='$displacement',power='$power',cylinders='$cylinders',fueltype='$fueltype',gear='$gear',torque='$torque',speed='$speed',weight='$weight',manufacture='$manufacture'where pid='".$pid."'";
    
    $run=mysqli_query($con,$query);
       
    if($run)
             header('location:viewproduct.php');
    else
        echo "OOPS!! not updated";
}

?>