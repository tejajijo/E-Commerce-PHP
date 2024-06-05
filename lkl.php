<?php
 session_start();
 $uname=$_SESSION['uname'];
 include('connect.php');
$query="SELECT * FROM  product";
$res=mysqli_query($con,$query);
?>
<!DOCTYPE html>
<html>
<head>

	<link rel="icon"  href="ic.png">
	<title>ROYAL BAJAJ</title>
       <link rel="stylesheet" type="text/css" href="test.css">
    <style type="text/css">
        .select select{
            
        }
     </style>
        <script>
        
        function check(){
            
            $pname=document.bookingt.pname.value;
            $date=document.bookingt.date.value;
            $time=document.bookingt.date.value;
    
            if($pname==""){
                window.alert("Enter your desired bike name");
                return false;
                focus();
            }
    
            if($date==""){
                window.alert("Enter date");
                return false;
                focus();
        }
    
            if($time==""){
                window.alert("Enter time");
                return false;
                focus();
            }
        </script>
    </head>
    <body>
       
        <form method="post" name="bookingt">
        <div class="main">
                 <tr>
                     
            <h2>BOOK YOUR TESTDRIVE NOW!!</h2><br><br><br>
                     <hr>
            <table cellpadding="20%" width=100%>
                <tr>
                <th>TEST DRIVE ID<th>
                    <td><input type="text" name="tid" value="<?php echo 'TD'; echo rand(100,1000)?>"></td>
                </tr>
                
                  <tr>
                <th>USERNAME<th>
                    <td><input type="text" name="uname" value="<?php echo $uname?>"></td>
                </tr>
                
              <tr>
                    <th> BIKE MODEL</th>
                    <td> 
                        <select name="pname">
                    <?php
                if($res){
               while( $row=mysqli_fetch_array($res)){
                  echo '  <option>----SELECT BIKE----</option>
                     <option value="'.$row['pname'].'"> '.$row['pname'].'</option>';
                     }
                     }
                     ?>
                        </select>
                           
                      </td>
                    
                </tr>  
                <tr>
                <th>BOOKING DATE<th>
                    <td><input type="date" name="date" ></td>
               
                <th>BOOKING TIME<th>
                     <td><input type="time" name="time"></td>
                </tr>
                 <tr>
               
                    <td><input type="submit" name="booknow" value="BOOK NOW" onclick="return check()"></td>
                </tr>
            </table>
            </div>
        </form>
    </body>
</html>
 <?php
include('usersidebar.php');
include('tbook.php');
?>


