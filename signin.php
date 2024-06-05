<!DOCTYPE html>
<html>
<head>
	<link rel="icon"  href="ic.png">
	<title>SIGN IN</title>
    <link rel="stylesheet" type="text/css" href="signin.css">
    </head>
<body>
        <div class="box">
		<form method="post"  name="signin">
			<table cellpadding="25" width="80%">
				<h2>SIGN IN HERE</h2>
			<tr>
                <th>FIRST NAME</th>
				<td> <input type="text"  name="fname" placeholder="First name" ></td>
                <th>LAST NAME</th>
				<td> <input type="text"  name="lname"  placeholder="Last name" ></td>
				</tr>

				<tr>
                    <th>AGE</th>
				<td> <input type="number"  name="age"  placeholder="Age" ></td>
                    <th>LICENSE NUMBER</th>
				<td> <input type="text"  name="l_no"  placeholder="License number" ></td>
				</tr>

			<tr>
                <th>EMAIL</th>
				<td> <input type="email"  name="email"  placeholder="Email" ></td>
				</tr>

			<tr>
                <th>CONTACT</th>
				<td> <input type="number"  name="contact"  placeholder="contact"></td>
				
                <th>USER NAME</th>
				<td> <input type="text"  name="uname" ></td>
                </tr>
				<tr>
                    <th>PASSWORD</th>
                   <td> <input type="password"  name="pswd"placeholder="password" ></td>
				
                <th>CONFIRM PASSWORD</th>
				<td> <input type="password"  name="rpswd" placeholder="Re-enter password" ></td>
				</tr>

			</table>
            
			<input type="submit" name="signin" value="SIGN IN" onclick="return validation()">
		</form><br>
	</div>
<script src="signinvalidation.js"></script>
</body>
</html>
<?php
include('signin2.php');
?>