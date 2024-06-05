<!DOCTYPE html>
<html>
<head>

	<link rel="icon"  href="ic.png">
	<title>ROYAL BAJAJ</title>
    <style type="text/css">
        .main{
             margin-left: 18%;  
        }
    
      .display input[type="submit"]{
            border: none;
            background: midnightblue;
            color: white;
            width: 150px;
            height: 25px;
            font-size: 17px;
        }
       .main  h2{
           
            margin-left: 42%;
            font-size: 30px;
        }
        .feature{
           margin-left: 55%; 
           
        }
        .display table tr,th,td{
            
            border: none;
            border-collapse: collapse;
           
            
        }
        
        .display th{
            
            width: 20%;
        }
        
       
    </style>
    </head>
    <body>
        <div class="main">
            
            <h2>BIKE LIST</h2>
            <br><br>
        <?php
        include('connect.php');
        $sql="SELECT * FROM product ORDER  BY pid DESC";
        $run=mysqli_query($con,$sql);
        while($row=mysqli_fetch_array($run)){
        echo '<div class="display">
               <table  cellpadding=20% width=100%>
                
                <th rowspan="4">
                    <img src="data:image/jpg;base64,'.base64_encode($row['pimg']).'" height="400" width="400"/><th>
                    <div class="row">
                    <div class="model">
                    <tr>
                     <td>MODEL: '.$row['pname']. '</td>
                     </tr>
                     </div>
                     <div class="fuel">
                     <tr>
                    <td>FUEL TYPE: '.$row['fueltype']. '</td>
                   </tr>
                   </div>
                   <div class="button">
                   <tr>
                   <td> <form method=post action="viewallbikes.php">
                    <input type=hidden name=pid value="'.$row['pid'].'">
                    <input type=submit name=view value="view details">
                    </form></td>
                    </tr>
                    <div>
                    </div>
                </table>
                </div>
                 ';
              
        }
        ?>
        </div>
    </body>
</html>