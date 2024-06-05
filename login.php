<!DOCTYPE html>
<html>
<head>
	<link rel="icon"  href="ic.png">
	<title>ROYAL BAJAJ</title>
    <link rel="stylesheet" type="text/css" href="login2.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
</head>
    <body>
        <div class="modal" id="id01">
        <span onclick="document.getElementById('id01').style.display='none'"
class="close" title="Close Modal">&times;</span>
       <div class="container">
		<form method="post" class="modal-content animate">
			<table cellspacing="15">
                
				<h2>LOGIN</h2>
                <tr>
               <div class="input-container">
				<th><i class="fa fa-user icon"></i></th><td><input  class="input-field" type="text"  name="name" placeholder="Username"></td>
                    </div>
                </tr>
                <tr>
                  <div class="input-container">  
				<th><i class="fa fa-key icon"></i></th><td><input  class="input-field" type="password"  name="paswd" placeholder="password"></td>
                    </div>
				</tr>
                <tr>
                    <td><input type="submit" name="login" value="LOG IN"></td>
                </tr>
			</table>
            <div class="signup">
            <a href="signin.php">Signup</a> here<br><br>
            </div>
		</form><br>
        </div>
	</div>
</body>
</html>
<?php
(include'login2.php');

?>