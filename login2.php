<?php
session_start();
include('connect.php');
if(isset($_POST['login'])){
$uname=$_POST['name'];
$pswd=$_POST['paswd'];
$check="SELECT * FROM signin WHERE uname='$uname' and pswd='$pswd'";
$run=mysqli_query($con,$check);

if(mysqli_num_rows($run)>0){
	$_SESSION['uname']=$uname;
	header("location:user.php");
	exit;
}
else {
	$check="SELECT * FROM admin WHERE aname='$uname' and apswd='$pswd'";
	$run=mysqli_query($con,$check);

	if(mysqli_num_rows($run)>0){
	$_SESSION['uname']=$uname;
	header("location:admin.php");
	exit;
}

else {
	echo "<p>*Invalid username or password<p>";
}
}
}
?>