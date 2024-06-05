<?php
include('connect.php');
$tid=$_POST['tid'];
if(isset($_POST['testupdate'])){
   $sql="SELECT * FROM testdrive INNER JOIN signin ON testdrive.uname=signin.uname WHERE testdrive.status='".$status."'";
    $run=mysqli_query($con,$sql);
    while($row=mysqli_fetch_array($run)){
        
        $tid=$row['tid'];
        $uuname=$row['uname'];
        $email=$row['email'];
        $pname=$row['pname'];
        $date=$row['date'];
        $time=$row['time'];
        $status=$row['status'];
    }
}
ini_set('SMTP','localhost');
ini_set('smtp_port',);
$to=$email;
$subject="test drive booking approved";
$message="Dear customer,
            thanks for choosing Royal Bajaj Adimaly as your testdrive center.
            your booking for '".$pname."' on '".$date."' at '".$time."' is approved.
            Thank you";

$headers="From: <adimalyroyal@gmail.com>";
$headers.="Content-type:text/html\r\n";

if(isset($_POST['sendmail'])){
    
     mail($to,$subject,$message,$headers);
}

?>

<html>
    <head>
         <link rel="stylesheet" type="text/css" href="addproduct.css">
        <style type="text/css">
           .mail h2{
                margin-left:35%;
            }
            .mail {
                margin-left:-7%;
                margin-top:10%; 
                border: ridge;
                width: 100%;
                padding-left: 45px;
                
            }
            
            .mail input[type="text"]{
                margin-left: 20%;
            }
            .mail textarea{
                border: groove;
                background: transparent;
                border-radius: 4px;
                width: 350px;
                height: 215px;
                text-align: center;
                margin-left: -35%;
                display: inline-block;
                margin-left: 20%;
                } 
            .main tr th{
                padding-left: 15%;
            }
        </style>
    </head>
    <body>
        <div class="main">
             <div class="mail">
            <h2>SEND MAIL IF APPROVED</h2>
           
            <table width="10%">
                <tr>
                <th>FROM</th>
                <td><input type="text" name="from" value="<?php echo $headers?>"></td>
                </tr>
                
                <tr>
                <th>TO</th>
                <td><input type="text" name="to" value="<?php echo $email ?>"></td>
                </tr>
                
                <tr>
                <th>SUBJECT</th>
                <td><input type="text" name="subject" value="<?php echo $subject?>"></td>
                </tr>
                
                <tr>
                <th>MESSAGE</th>
                    <td><textarea rows="20" cols="30"name="msg"><?php echo $message?></textarea></td>
                </tr>
                <form method="post">
                <tr>
                <td><input type="submit" name="sendmail" value="sendmail"></td>
                </tr>
                </form>
            </table>
            </div>
        </div>
        </body>
</html>