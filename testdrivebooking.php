<?php
 session_start();
 $uname=$_SESSION['uname'];
 include('connect.php');
$query="SELECT * FROM  product";
$res=mysqli_query($con,$query);
date_default_timezone_set('Asia/Kolkata');
$date= date("Y-m-d");
$time=date("h:i:p");
?>
<!DOCTYPE html>
<html>
<head>

	<link rel="icon"  href="ic.png">
	<title>ROYAL BAJAJ</title>
       <link rel="stylesheet" type="text/css" href="test.css">
    </head> 
    
    <body>
        <div class="main">
            <h2>BOOK YOUR TEST DRIVE ! ! ! ! !</h2>
            <form name="test" method="post">
                <table cellpadding="20%">
                    <tr>
                        <th>TEST ID</th>
                        <td><input type="text" name="tid" value="<?php echo "TD" ; echo rand(100,1000) ?>"></td>
                    </tr>
                    
                    <tr>
                        <th>USER NAME</th>
                        <td><input type="text" name="uname" value="<?php echo $uname ?>"></td>
                    </tr>
                    <tr>
                        <th>BIKE MODEL</th>
                        <td><select name="pname">
                            <?php
                            if($res){
                                while($row=mysqli_fetch_array($res)){
                                    echo'<option></option>
                                        <option value="'.$row['pname'].'">'.$row['pname'].'</option>';
                                }
                            }
                            ?>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <th>DATE</th>
                        <td><input type="date" name="date" required></td>
                        <th>TIME</th>
                       <td><input type="time" name="time" required></td>
                        
                    </tr>
                    <tr>
                        <td><input type="hidden" name="bdate" value="<?php echo $date?>"></td>
                        <td><input type="hidden" name="btime" value="<?php echo $time?>"></td>
                    </tr>
                </table>
                <input type="submit" name="booknow" value="BOOK NOW" onclick="return validation()">
            </form>
            <?php include('tbook.php')?>
        </div>
        <script src="testvalidation.js"></script>
    </body>
</html>
 <?php
include('usersidebar.php');
?>


