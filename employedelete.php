<?php
include('connect.php');
session_start();
$uname=$_POST['uname'];
If(isset($_POST['delete'])){
    $eid=$_POST['eid'];
    $query="DELETE FROM employee WHERE eid='".$eid."' ";
    $run=mysqli_query($con,$query);
    if($run){
        echo"deleted";
    header("location:editemploye.php");
    }
    else
        echo"not deleted";
        
}
?>