<!DOCTYPE html>
<html>
<head>
	<link rel="icon"  href="ic.png">
	<title>SIGN IN</title>


</head>
<style type="text/css">

	p{
		color:red;
		margin-left: 20%;
		margin-top: -9%;
	}
	h2{
		margin-left: 70px;
		color: midnightblue;
	}
	.box{
		text-align: left;
		margin-top: 5%;
		margin-left: 40%;
		box-sizing: border-box;
		background: transparent;
		padding: 30px 20px;
		height: 550px;
		width: 300px;
		letter-spacing:5px;

		}
		th{
			text-align: center;
		}
		.box input[type="text"]{
			border-radius: 7px;
			height: 25px;
			text-align: center;
			width: 220px;
			border:solid;
			border-color: lightgrey;

		}
		.box input[type="password"]{
			border-radius: 7px;
			height: 25px;
			text-align: center;
			width: 220px;
			border:solid;
			 border-color: lightgrey;
		}

		.box input[type="email"]{
			border-radius: 7px;
			height: 25px;
			text-align: center;
			width: 220px;
			border:solid;
			 border-color: lightgrey;
		}

		.box input[type="submit"]{
			margin-left: 18px;
			width: 220px;
			height: 30px;
			background-color: midnightblue;
			letter-spacing: 3px;
			font-family: serif;
			color: white;
			border:none;
		}

		.box input[type="number"]{
			border-radius: 7px;
			height: 25px;
			text-align: center;
			width: 220px;
			border:solid;
			 border-color: lightgrey;
		}
</style>
<body>
	<div class="box">
		<form method="post"  name="signin" >
			<table cellspacing="15">
				<h2>SIGN IN</h2>
			<tr>
				<td> <input type="text"  name="fname" placeholder="First name" ></td>
				</tr>

			<tr>
				<td> <input type="text"  name="lname"  placeholder="Last name" ></td>
				</tr>

				<tr>
				<td> <input type="number"  name="age"  placeholder="Age" ></td>
				</tr>

				<tr>
				<td> <input type="text"  name="l_no"  placeholder="License number" ></td>
				</tr>

			<tr>

				<td> <input type="email"  name="email"  placeholder="Email" ></td>
				</tr>

			<tr>
				<td> <input type="number"  name="contact"  placeholder="contact"></td>
				</tr>

			<tr>
				<td> <input type="text"  name="uname"  placeholder="Username"></td>
				</tr>

			<tr>
				<td> <input type="password"  name="pswd"placeholder="password" ></td>
				</tr>

			<tr>
				<td> <input type="password"  name="rpswd" placeholder="Re-enter password" ></td>
				</tr>

			</table>

			<input type="submit" name="signin" value="SIGN IN" onclick="return validation()">
		</form><br>
	</div>
	<script>

	function validation(){

	var fname=document.signin.fname.value;
	var lname=document.signin.lname.value;
	var age=document.signin.age.value;
	var l_no=document.signin.l_no.value;
	var email=document.signin.email.value;
	var contact=document.signin.contact.value;
	var uname=document.signin.uname.value;
	var pswd=document.signin.pswd.value;
	var rpswd=document.signin.rpswd.value;

	if(fname==""){
		window.alert("ENTER YOUR FIRST NAME");
		fname.focus();
		return false;
	}

	if(lname==""){
		window.alert("ENTER YOUR LAST NAME");
		return false;
	}

	if(age==""){
		window.alert("ENTER YOUR AGE");
		return false;
	}

	else if(age<18 || age>60){
		window.alert("AGE DOESNOT SUIT");
		return false;
	}

	else (age.length>2 || age.length<2){
		window.alert("AGE DOESNOT SUIT");
		return false;
	}

	if(l_no==""){
		window.alert("ENTER YOUR LICENSE NUMBER");
		return false;
	}

	else if(!l_no.match(^(?<intro>[A-Z]{2})(?<numeric>\d{2})(?<year>\d{4})(?<tail>\d{7})$)){
		window.alert("ENTER VALID LICENSE NUMBER");
		return false;
	}

	if(email==""){
		window.alert("ENTER YOUR EMAIL ADDRESS");
		return false;
	}
	else if(!email.match(/^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/))
	{
		window.alert("ENTER VALID EMAIL ADDRESS");
		return false;
	}
	if(contact==""){
		window.alert("ENTER YOUR CONTACT NUMBER");
		return false;
	}
	else if(contact.length<10 || contact.length>10)
	{
		window.alert("ENTER VALID CONTACT NUMBER");
		return false;
	}

	if(uname==""){
		window.alert("ENTER YOUR USER NAME");
		return false;
	}
	else if(uname.length<5 || uname.length>10){
		window.alert("USER NAME SHOULD HAVE 5 TO 10 CHARACTERS");
		return false;
	}
	if(pswd==""){
		window.alert("ENTER YOUR PASSWORD");
		return false;
	}
	else if(!pswd.match( /(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{6,}/)){
		window.alert("password should have at least ONE NUMBER, ONE LOWERCAE and ONE UPPERCASE letter at least SIX CHARACTERS");
		return false;
	}

	if(rpswd==""){
		window.alert("CONFORM YOUR PASSWORD");
		return false;
	}
	else if(rpswd!=pswd){
			window.alert("PASSWORD DONOT MATCH");
			return false;
		}
	}


</script>

</body>
</html>

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

$insert="INSERT INTO signin (fname,lname,age,l_no,email,contact,uname,pswd) VALUES('$fname','$lname','$age','$l_no','$email','$contact','$uname','$pswd')";
$sql=mysqli_query($con,$insert);

if(!$sql){
	echo '<center><p><b> User Exist !!</b></p></center>';
}
else{
	header("location:login.php");
}
}
?>