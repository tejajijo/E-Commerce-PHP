<?php
include('connect.php');
session_start();
$uname=$_POST['uname'];
If(isset($_POST['delete'])){
    $pid=$_POST['pid'];
    $query="DELETE FROM product WHERE pid='".$pid."' ";
    $run=mysqli_query($con,$query);
    if($run){
        echo"deleted";
    header("location:viewproduct.php");
    }
    else
        echo"not deleted";
        
}
?>