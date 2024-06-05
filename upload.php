<?php
session_start();
$uname=$_SESSION['uname'];
include('connect.php');

if(isset($_POST['upload']))
{
    $pid=$_POST['pid'];
    $image=$_FILES['image']['tmp_name'];
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
    
    if(empty($image)){
        echo "<a>Enter an image of bike</a>";
        return false;
        
    }
    echo "<br>";
    
    
    if(empty($pname)){
        echo "<a>please product name</a>";
         return false;
    }
     echo "<br>";
    
    if(empty($mileage)){
        echo "<a>Enter  mileage of bike</a>";
         return false;
    }
     echo "<br>";
    
    if(empty($displacement)){
        echo "<a>Enter  displacement of bike</a>";
         return false;
    }
     echo "<br>";
    
    if(empty($speed)){
        echo "<a>Enter  speed of bike</a>";
         return false;
    }
     echo "<br>";
    
    if(empty($weight)){
        echo "<a>Enter  weight of bike</a>";
         return false;
    }
     echo "<br>";
    
    if(empty($manufacture)){
        echo "<a>Enter year of manufacture</a>";
         return false;
    }
    
    else{

    $image=addslashes(file_get_contents($_FILES['image']['tmp_name']));
        $image_name=$_FILES['image']['tmp_name'];
        $image_size=getimagesize($_FILES['image']['tmp_name']);
        if($image_size==FALSE){
            echo "Please insert an image only!!";
        }
        else{
    
    $query="INSERT INTO product(pid,pimg,pname,mileage,disp,power,cylinders,fueltype,gear,torque,speed,weight,manufacture) VALUES ( '$pid','$image','$pname','$mileage','$displacement','$power','$cylinders','$fueltype','$gear','$torque','$speed','$weight','$manufacture' )";
        
        
        $run=mysqli_query($con,$query);
       
    
        if($run){
            echo '<center><p>Sucessfully uploaded<p></center>';
            header('location:viewproduct.php');
        }
    
        else{
            echo '<center><a>datas didnt get uploaded<a></center>';
        }
        
        }
    
    }
}

?>