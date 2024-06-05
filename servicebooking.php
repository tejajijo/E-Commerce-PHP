<?php
 session_start();
 $uname=$_SESSION['uname'];
 include('connect.php');
$query="SELECT * FROM  product";
$res=mysqli_query($con,$query);
date_default_timezone_set('Asia/Kolkata');
$date= date("Y-m-d");
$time=date("h:i:s:a");
?>

<!DOCTYPE html>
<html>
<head>

	<link rel="icon"  href="ic.png">
	<title>ROYAL BAJAJ</title>
    <link rel="stylesheet" type="text/css" href="userservice.css">
    <style type="text/css">
        .main{
            margin-left: 450px;
        }
        </style>
    </head>
    <body>
       <div class="main">
           <h2>BOOK YOUR SERVICE DATE</h2>
           <form method="post" name="bookings">
               <table cellpadding="15%">
                   <tr>
                       <th>SERVICE ID</th>
                       <td><input type="text" name="sid" value="<?php echo "SV"; echo rand(100,1000)?>"></td>
                   </tr>
                   
                    <tr>
                       <th>USER NAME</th>
                       <td><input type="text" name="uname" value="<?php echo $uname ?>"></td>
                   </tr>
                   
                    <tr>
                       <th>SERVICE TYPE</th>
                       <td><select name="stype" required>
                           <option>----SELECT SERVICE TYPE----</option>
                            <option value="paid">PAID</option>
                            <option value="free">FREE</option>
                           </select>
                           </td>
                   </tr>
                   
                   <tr>
                        <th>BIKE MODEL</th>
                        <td><select name="bname" required>
                            <?php
                            if($res){
                                while($row=mysqli_fetch_array($res)){
                                    echo'<option>---SELECT BIKE----</option>
                                        <option value="'.$row['pname'].'">'.$row['pname'].'</option>';
                                }
                            }
                            ?>
                            </select>
                        </td>
                       
                       <tr>
                       <th>VEHICLE NUMBER</th>
                       <td><input type="text" name="vno" required></td>
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
                   <tr>
                      <td>
                       <input type="submit" name="sbooknow" value="BOOK NOW">
                       </td>
                   </tr>
               </table>
           </form>
           <?php include('sbook.php')?>
        </div>
    </body>
</html>
 <?php
include('usersidebar.php');
?>


