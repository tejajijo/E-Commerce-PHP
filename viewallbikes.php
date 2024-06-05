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
           
            margin-left: 30%;
            font-size: 30px;
        }
        .feature{
           margin-left: 55%; 
           
        }
        .display table tr,th,td{
            
            border: none;
            border-collapse: collapse;
            
            
        }
        
        
        .display tr th{
            text-align: left;
            width: 30%;
        }
        
        .display td{
            padding-right: 25%;
        }
        
        .image{
            width: 70%;
        }
        
       
    </style>
    </head>
    <body>
<div class="main">

<?php
include('connect.php');
if(isset($_POST['view'])){
    $pid=$_POST['pid'];
    $query="SELECT * FROM product where pid='".$pid."'";
    $run=mysqli_query($con,$query);
    while($row=mysqli_fetch_array($run)){
        
        echo '<div class="display">
               <table  cellpadding=20% width=100%>
                <div class="image">
                <th rowspan="12">
                    <img src="data:image/jpg;base64,'.base64_encode($row['pimg']).'" height="400" width="400"/><th>
                    </div>
                    <tr>
                     <th>MODEL </th>
                     <td>'.$row['pname']. '</td>
                     </tr>
                     <tr>
                     <th>MILEAGE </tn>
                     <td>'.$row['mileage']. '</td>
                     </tr>
                     <tr>
                     <th>ENGINE DISPLACEMENT </th> 
                     <td>'.$row['disp']. '</td>
                     </tr>
                     <tr>
                     <th>POWER </th> 
                     <td>'.$row['power']. '</td>
                     </tr>
                     <tr>
                     <th>NO OF CYLINDERS</th>
                     <td> '.$row['cylinders']. '</td>
                     </tr>
                     <tr>
                    <th>FUEL TYPE</th>
                    <td>'.$row['fueltype']. '</td>
                   </tr>
                   <tr>
                     <th>NO OF GEAR</th>
                     <td> '.$row['gear']. '</td>
                     </tr>
                     <tr>
                     <th>TORQUE</th> 
                     <td>'.$row['torque']. '</td>
                     </tr>
                     <tr>
                     <th>SPEED</th> 
                     <td>'.$row['speed']. '</td>
                     </tr>
                     <tr>
                     <th>WEIGHT </th>
                     <td>'.$row['weight']. '</td>
                     </tr>
                     <tr>
                     <th>YEAR OF MANUFACTURE</th>
                     <td> '.$row['manufacture']. '</td>
                     </tr>
                </table>
                </div>
                 ';
        
    }
    
}
?>
     </div>
    </body>
</html>






