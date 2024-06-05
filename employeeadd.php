<?php
session_start();
$uname=$_SESSION['uname'];
include('connect.php');
?>
<!DOCTYPE html>
<html>
<head>
	<link rel="icon"  href="ic.png">
	<title>ADMIN PANEL</title>
    <link rel="stylesheet" type="text/css" href="addproduct.css">
    
</head>
<body>
    
	<form method="post">
	<div class="main">
        <h2>EMPLOYEE DETAILS FORM</h2>
  <hr>
    <div class="box">
<form name="employee" >
  <table align="center" width="50%" cellpadding="10">
    <tr>
        <th>EMPLOYEE ID</th>
     <td>
       <input type="text" name="eid" value="<?php echo 'EM'; echo rand(100,1000);?>" >
     </td>
   </tr>

    <tr>
        <th>EMPLOYEE NAME</th>
     <td>
       <input type="text" name="ename" required>
     </td>
   </tr>
   <tr>
       <th>EMPLOYEE DESIGNATION</th>
     <td>
         <div class="select">
         <select name="edes" required>
             <option>----SELECT DESIGNATION----</option>
             <option value="Manager">Manager</option>
             <option value="sales manager">Sales Manager</option>
             <option value="sales executive">Sales Executive</option>
             <option value="mechanic">Mechanic</option>
             <option value="service manager">Service Manager</option>
             <option value="spare incharge">Spare Incharge</option>
             <option value="accountant">Accountant</option>
         </select>
             </div>
       </td>
   </tr>
   <tr>
       <th>EMPLOYEE CONTACT</th>
     <td>
       <input type="number" name="econtact" required maxlength="10" min="10">
     </td>

   </tr>
   <tr>
      <td>
        <input type="submit" name="insert" value="INSERT">
      </td>
   </tr>
  </table>
</form>
</div>




    </div>
            </form>
   </body>
   </html>

 <?php
    
if(isset($_POST['insert'])){

$eid=$_POST['eid'];
$ename=$_POST['ename'];
$edes=$_POST['edes'];
$econtact=$_POST['econtact'];

$insert="INSERT INTO employee (eid,ename,edes,econtact) VALUES('$eid','$ename','$edes','$econtact')";
$sql=mysqli_query($con,$insert);

if(!$sql)
  echo '<center><b> Oops something went wrong !!</b></center>';

else
  header('location: employeeview.php');

}
 ?>

<?php include('sidebar.php')?>
   


