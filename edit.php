<?php
include('connect.php');
session_start();
$uname=$_SESSION['uname'];
if(isset($_POST['edit'])){
    $pid=$_POST['pid'];
    $query="SELECT * FROM product where pid='".$pid."'";
    $run=mysqli_query($con,$query);
    while($row=mysqli_fetch_array($run)){
        
        $pid=$row['pid'];
        $pname=$row['pname'];
        $mileage=$row['mileage'];
        $displacement=$row['disp'];
        $power=$row['power'];
        $cylinders=$row['cylinders'];
        $fueltype=$row['fueltype'];
        $gear=$row['gear'];
        $torque=$row['torque'];
        $speed=$row['speed'];
        $weight=$row['weight'];
        $manufacture=$row['manufacture'];
        
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
        <form method="post" enctype="multipart/form-data" >
          <table cellpadding="15%"> 
              
                     <tr>
            <th>PRODUCT ID</th>
            
            <td> <input  name="pid" type="text" value="<?php echo $pid ?>"><br><br></td>
              </tr>
        <tr>
            <th>SELECT IMAGE</th>
           <td> <input  name="image" type="file" > <br><br></td>
              </tr>
            
            <tr> 
                <th>PRODUCT NAME</th>
                <td>  <input type="text" name="pname" value="<?php echo $pname ?>"></td>
            </tr>
            
             <tr>
                <th>PRODUCT MILEAGE</th>
                 <td> <input type="text" name="mileage" value="<?php echo $mileage ?>" ></td>
            </tr>
            
             <tr>
                <th>PRODUCT DISPLACEMENT </th>
                 <td> <input type="text" name="displacement" value="<?php echo $displacement ?>" ></td>
            </tr>
               <tr>
                <th>POWER</th>
                 <td><input type="text" name="power" value="<?php echo $power ?>"> </td>
            </tr>
               <tr>
                <th>No Of CYLINDERS</th>
                 <td><input type="text" name="cylinders" value="<?php echo $cylinders ?>"> </td>
            </tr>
               <tr>
                <th>FUEL TYPE</th>
                 <td><input type="text" name="fueltype" value="<?php echo $fueltype ?>"> </td>
            </tr>
               <tr>
                <th>NO Of GEARS </th>
                 <td><input type="text" name="gear" value="<?php echo $gear ?>"> </td>
            </tr>
               <tr>
                <th>TORQUE </th>
                 <td><input type="text" name="torque" value="<?php echo $torque ?>"> </td>
            </tr>
             <tr>
                <th>TOP SPEED</th>
                 <td> <input type="text" name="speed" value="<?php echo $speed ?>"></td>
            </tr>
             <tr>
                <th>WEIGHT</th>
                 <td> <input type="text" name="weight"  value="<?php echo $weight ?>"></td>
            </tr>
             <tr>
                <th>Year Of MANUFACTURE</th>
                  <td> <input type="text" name="manufacture"  value="<?php echo $manufacture ?>"></td>
            </tr>
            <tr>
                
               
                <td> <input type="submit" name="update" value="UPDATE" ></td>
            </tr>
        </table>
          <?php include('productupdate.php');
            ?>
        </form>
    </div>
    </body>
</html>
 
<?php include('sidebar.php') ?>




