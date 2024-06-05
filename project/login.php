<!DOCTYPE html>
<html>
<head>
	<link rel="icon"  href="ic.png">
	<title>ROYAL BAJAJ</title>
</head>
<style type="text/css">
	h2{
		margin-left: 75px;
		color: midnightblue;
	}
	.box{
		text-align: left;
		margin-top: 10%;
		margin-left: 40%;
		box-sizing: border-box;
		background: transparent;
		padding: 30px 20px;
		height: 350px;
		width: 300px;
		letter-spacing:5px;
		outline-style: groove;

		}
		th{
			text-align: center;
		}
		.box input[type="text"]{
			background: transparent;
			border: none;
			border-bottom:1px solid black;
			text-align: center;
			width: 220px;
		}

		.box input[type="password"]{
			background: transparent;
			border: none;
			border-bottom:1px solid black;
			text-align: center;
			width: 220px;
		}
		.box input[type="submit"]{
			margin-left: 30px;
			width: 180px;
			height: 30px;
			border-radius: 30px;
			background-color:midnightblue;
			letter-spacing: 3px;
			font-family: serif;
			color: white;
		}
		.box a{
			color: midnightblue;
			margin-left: 25%;
		}

		.box a:hover{
			color: red;
		}
		p{
			margin-left: 0%;
			margin-bottom: 800%;
			font-size: 20px;
		}
</style>
<body>
	<div class="box">
		<form method="post" action="login2.php">
			<table cellspacing="15">
				<h2>LOGIN</h2>
				<tr>
				<th>Username </th>
			</tr>
			<tr>
				<td> <input type="text"  name="uname" placeholder="Username"></td>
				</tr>


				<tr>
				<th>Password </th>
			</tr>
			<tr>
				<td> <input type="password"  name="pswd" placeholder="password"></td>
				</tr>
			</table>
			<input type="submit" name="login" value="LOG IN">
		</form><br>
		<a href="signin.php">Signup</a> here
	</div>

</body>
</html>

