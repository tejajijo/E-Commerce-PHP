

<html>
    <head>
    
	<link rel="icon"  href="ic.png">
	<title>ADMIN PANEL</title>
        <link rel="stylesheet" type="text/css" href="addproduct.css">
        
    </head>
<body>

    <div class="main">
       
        <form method="post"  enctype="multipart/form-data" name=addproduct>
            
          <table cellpadding="15%">
              <h2>PRODUCT DETAILS FORM</h2>
            <hr>
              
                     <tr>
            <th>PRODUCT ID</th>
            
            <td> <input  name="pid" type="text" value="<?php echo 'PR'; echo rand( 100, 10000)?>"> <br><br></td>
            </tr>
            <tr>
            <th>SELECT IMAGE</th>
           
            <td> <input  name="image" type="file"> <br><br></td>
                    
              </tr>
            
            <tr> 
                <th>PRODUCT NAME</th>
                <td><input type="text" name="pname" required> 
                
            </tr>
             <tr>
                <th>PRODUCT MILEAGE</th>
                 <td><input type="text" name="mileage" required> </td>
            </tr>
             <tr>
                <th>ENGINE DISPLACEMENT (CC) </th>
                 <td> <input type="text" name="displacement" required></td>
            </tr>
              <tr>
                <th>POWER (PS@rpm)</th>
                 <td> <input type="text" name="power"required value="PS@rpm"></td>
            </tr>
              <tr>
                <th>No OF CYLINDERS </th>
                 <td> <input type="number" name="cylinders" required></td>
            </tr>
              <tr>
                <th>FUEL TYPE </th>
                 <td> <input type="text" name="fueltype" required></td>
            </tr>
              <tr>
                <th>No OF GEAR</th>
                 <td> <input type="number" name="gear" required></td>
            </tr>
              <tr>
                <th>TORQUE(Nm@rpm) </th>
                 <td> <input type="text" name="torque" required value="Nm@rpm"></td>
            </tr>
             <tr>
                <th>TOP SPEED</th>
                 <td> <input type="text" name="speed" required></td>
            </tr>
             <tr>
                <th>WEIGHT</th>
                 <td> <input type="text" name="weight" required  ></td>
            </tr>
             <tr>
                <th>Year Of MANUFACTURE</th>
                 <td><input type="number" name="manufacture" required ></td>
            </tr>
            <tr>
               
                <td> <input type="submit" name="upload" value="UPLOAD" ></td>
            </tr>
       
        </table>
            <?php include("upload.php")?>
             </form>
    </div>
    </body>
</html>
<?php include("sidebar.php")?>

