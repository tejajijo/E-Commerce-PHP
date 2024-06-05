<?php
session_start();
$uname=$_SESSION['uname'];
include('connect.php');
$query="SELECT * FROM testdrive";
$res=mysqli_query($con,$query);
$row=mysqli_num_rows($res);

$select="SELECT * FROM service";
$result=mysqli_query($con,$select);
$show=mysqli_num_rows($result);

$sel="SELECT * FROM product";
$resu=mysqli_query($con,$sel);
$productshow=mysqli_num_rows($resu);

$selects="SELECT * FROM signin";
$results=mysqli_query($con,$selects);
$usershow=mysqli_num_rows($results);

$selectss="SELECT * FROM employee";
$resultss=mysqli_query($con,$selectss);
$employeshow=mysqli_num_rows($resultss);


?>


<!DOCTYPE html>
<html>
<head>
	<link rel="icon"  href="ic.png">
	<title>ADMIN PANEL</title>
    <link rel="stylesheet" type="text/css" href="admin.css">
</head>
<body>
    <div class="main">
            <?php echo 'WELCOME ';
         echo $uname;
    ?>
         <div class="log">
        <form method="post">
        <input type="submit" name="logout" value="LOG OUT">
                  
            <?php
            if(isset($_POST['logout'])){
                session_destroy();
                header("location:bajaj.php");
                exit();
                }
            ?>
    </form>
      </div>
        </div>
    <div class="dash">
        <br><br>
        <h2>DASHBOARD</h2>
        
    </div>
        <br><br><br><br>
    
    <div class="user">
        
         <table cellpadding="10%" >
             <tr>
                 <th>USERS</th>
                 </tr>
             <tr>
                 <td><input type="text" name="users" value=" <?php echo $usershow ?>"></td>
                 </tr>
             </table>
        </div>
    
    <div class="employe">
        
         <table cellpadding="10%" >
             <tr>
                 <th>EMPLOYEE</th>
                 </tr>
             <tr>
                 <td><input type="text" name="employes" value=" <?php echo $employeshow ?>"></td>
                 </tr>
             </table>
        </div>
    
    <div class="product">
        
         <table cellpadding="10%" >
             <tr>
                 <th>PRODUCTS</th>
                 </tr>
             <tr>
                 <td><input type="text" name="products" value=" <?php echo $productshow ?>"></td>
                 </tr>
             </table>
        </div>
    
    
        <div class="test">
        
         <table cellpadding="10%" >
             <tr>
                 <th>TEST DRIVE BOOKINGS</th>
                 </tr>
             <tr>
                 <td><input type="text" name="ctest" value=" <?php echo $row ?>"></td>
                 </tr>
             </table>
        </div>
    
    
        <div class="service">
        <table cellpadding="10%">
             <tr>
                 
                 <th>SERVICE BOOKINGS</th>
            </tr>
             <tr>
                 <td><input type="text" name="cservice" value=" <?php echo $show ?>"></td>
                 
             </tr>
            </table>
        </div>
   
    </body>
</html>
<?php
include('sidebar.php');

?>