<?php
session_start();
$uname=$_SESSION['uname'];
include('connect.php');
$query="SELECT * FROM testdrive WHERE uname='".$uname."'";
$res=mysqli_query($con,$query);
$row=mysqli_num_rows($res);

$select="SELECT * FROM service WHERE uname='".$uname."'";
$result=mysqli_query($con,$select);
$show=mysqli_num_rows($result);
?>


<!DOCTYPE html>
<html>
<head>
	<link rel="icon"  href="ic.png">
	<title>ROYAL BAJAJ</title>
	<link rel="stylesheet" type="text/css" href="user.css">
</head>
<body>
    <div class="main">
            <?php echo 'WELCOME';
         echo $uname;
    ?>
        <div class="log">
        <form method="post">
        <input type="submit" name="logout" value="LOGOUT">
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
include('usersidebar.php')?>