<?php
include("connect.php");
if(isset($_POST['signin']))
{
$fname=$_POST['fname'];
$lname=$_POST['lname'];    
$age=$_POST['age'];
$l_no=$_POST['l_no'];
$email=$_POST['email'];
$contact=$_POST['contact'];
$uname=$_POST['uname'];	
$pswd=$_POST['pswd'];
$rpswd=$_POST['rpswd'];
    
    if(empty($uname)){
        echo'<script language=javascript>
              window.alert("Enter username")
              return false
              </script>';          
    }
    else{
    
    $check="SELECT * FROM signin WHERE uname='".$uname."'";
    $res=mysqli_query($con,$check);
    if(mysqli_num_rows($res)>0){
        $fpart=substr(($fname),0,3);
        $lpart=substr(($lname),0,3);
        $rand=rand(0,100);
        $uname=$fpart.$lpart.$rand;
        echo"<center>Sorry username exist....try '" .$uname."'</center>";
        exit();
    }
    else{

$insert="INSERT INTO signin (fname,lname,age,l_no,email,contact,uname,pswd) VALUES('$fname','$lname','$age','$l_no','$email','$contact','$uname','$pswd')";
$sql=mysqli_query($con,$insert);
        if($sql){
        header('location:bajaj.php');
        }
    }
}
}
?>