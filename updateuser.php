<?php
include('connect.php');
session_start();
$uname=$_SESSION['uname'];
    $query="SELECT * FROM signin where uname='".$uname."'";
    $run=mysqli_query($con,$query);
    while($row=mysqli_fetch_array($run)){
        
        $fname=$row['fname'];
        $lname=$row['lname'];
        $age=$row['age'];
        $lno=$row['l_no'];
        $email=$row['email'];
        $contact=$row['contact'];
        $uname=$row['uname'];
        $pswd=$row['pswd'];
    }
?>



<html>
    <head>
    
	<link rel="icon"  href="ic.png">
	<title>ROYAL BAJAJ</title>
   <link rel="stylesheet" type="text/css" href="signin.css">
        <style type="text/css">
            .main{
                margin-left: 150px;
            }
            input[type=submit]{
                margin-left: 15%;
                width: 690%;
                height:35px;
                background: midnightblue;
                color: white;
                border: none;
            }
            input[type=email]{
                padding: 10px;
            }
            h2{
                margin-left: 50%;
            }
        </style>
    </head>
<body>
<h2>UPDATE YOUR PROFILE</h2><br><br>
    <div class="main">
        <form method="post">
            <div class="box">
          <table cellpadding="20%"> 
              
              
                     <tr>
            <tr>
                <th>FIRST NAME</th>
				<td> <input type="text"  name="fname" value="<?php echo $fname?>"></td>
                <th>LAST NAME</th>
				<td> <input type="text"  name="lname" value="<?php echo $lname?>"></td>
				</tr>

				<tr>
                    <th>AGE</th>
				<td> <input type="number"  name="age"  value="<?php echo $age?>"></td>
                    
                    <th>LICENSE NUMBER</th>
				<td> <input type="text"  name="l_no"  value="<?php echo $lno?>" ></td>
				</tr>

			<tr>
                <th>EMAIL</th>
				<td> <input type="email"  name="email" value="<?php echo $email?>" ></td>
				</tr>

			<tr>
                <th>CONTACT</th>
				<td> <input type="number"  name="contact" value="<?php echo $contact?>"></td>
				</tr>
              
              <tr>
                <th>USER NAME</th>
				<td> <input type="text"  name="uname"value="<?php echo $uname?>" ></td>
                    <th>PASSWORD</th>
                  
                   <td> <input type="text"  name="pswd"placeholder="password" value="<?php echo $pswd?>" ></td>
                  </tr>
              <tr>
                <td> <input type="submit" name="update" value="CHANGE" ></td>
              </tr>
        </table>
            </div>
       </form> 
    </div>
    </body>
</html>

  <?php

if(isset($_POST['update']))
{
    
$fname=$_POST['fname'];
$lname=$_POST['lname'];    
$age=$_POST['age'];
$l_no=$_POST['l_no'];
$email=$_POST['email'];
$contact=$_POST['contact'];
$uname=$_POST['uname'];	
$pswd=$_POST['pswd'];
    
   
    $query="UPDATE signin SET fname='$fname',lname='$lname',age='$age',l_no='$l_no',email='$email',contact='$contact',uname='$uname',pswd='$pswd' where uname='".$uname."'";
    
    $run=mysqli_query($con,$query);
    if($run){
        
       header('location:user.php');
       
    }
    else
        echo "OOPS!! not updated";
}



?>
    
<?php 
include('usersidebar.php');
?>






