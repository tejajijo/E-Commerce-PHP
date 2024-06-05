<?php
include('connect.php');
session_start();
$uname=$_SESSION['uname'];
if(isset($_POST['edit'])){
    $eid=$_POST['eid'];
    $query="SELECT * FROM employee where eid='".$eid."'";
    $run=mysqli_query($con,$query);
    while($row=mysqli_fetch_array($run)){
        
        $eid=$row['eid'];
        $ename=$row['ename'];
        $edes=$row['edes'];
        $econtact=$row['econtact'];
    }
}
?>



<html>
    <head>
    
	<link rel="icon"  href="ic.png">
	<title>ADMIN PANEL</title>
    <link rel="stylesheet" type="text/css" href="addproduct.css">
        
         <style type="text/css">
        
   .select select{
    border: groove;
    background: transparent;
    border-radius: 4px;
    width: 350px;
    height: 37px;
    margin-left: -34.5%;
    display: inline-block;
    padding: 2px;
    line-height: 1px;
    direction: ltr;
    text-align-last: center;
}
        .select select option{
            font-size: 15px;
            border-radius: 4px;
            padding-left: 60px;
        }
    
    </style>
    </head>
<body>

    <div class="main">
           <h2>EMPLOYEE UPDATE FORM</h2>
  <hr>
        <form method="post" >
          <table cellpadding="10%"> 
           <tr>   
                <th>EMPLOYEE ID</th>
     <td>
       <input type="text" name="eid" value="<?php echo $eid?>" >
     </td>
   </tr>

    <tr>
        <th>EMPLOYEE NAME</th>
     <td>
       <input type="text" name="ename" value="<?php echo $ename?>">
     </td>
   </tr>
   <tr>
       <th>EMPLOYEE DESIGNATION</th>
     <td>
         <div class="select">
         <select name="edes" >
             <option><?php echo $edes?></option>
             <option value="Manager">Manager</option>
             <option value="Sales Manager">Sales Manager</option>
             <option value="Sales Executive">Sales Executive</option>
             <option value="Mechanic">Mechanic</option>
             <option value="service manager">Service Manager</option>
             <option value="spare incharge">Spare Incharge</option>
         </select>
         </div>
       </td>
   </tr>
   <tr>
       <th>EMPLOYEE CONTACT</th>
     <td>
       <input type="number" name="econtact" value="<?php echo $econtact?>">
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
    $eid=$_POST['eid'];
    $ename=$_POST['ename'];  
    $edes=$_POST['edes'];
    $econtact=$_POST['econtact'];
    
    $query="UPDATE employee SET eid='$eid',ename='$ename', edes='$edes',econtact='$econtact' WHERE eid='".$eid."'";
    
    $run=mysqli_query($con,$query);
    if($run){
        
        header('location:employeeview.php');
    }
    else
        echo "OOPS!! not updated";
}


?>

<?php include('sidebar.php')?>





