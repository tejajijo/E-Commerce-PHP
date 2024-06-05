 <?php
include('connect.php');
if(isset($_POST['sbooknow'])){
    $sid=$_POST['sid'];
    $uname=$_POST['uname'];
    $stype=$_POST['stype'];
    $bname=$_POST['bname'];
    $vno=$_POST['vno'];
    $bdate=$_POST['bdate'];
    $btime=$_POST['btime'];
    $date=$_POST['date'];
    $time=$_POST['time'];
    $insert="INSERT INTO service(sid,uname,stype,bname,vno,bdate,btime,date,time) VALUES('$sid','$uname','$stype','$bname','$vno','$bdate','$btime','$date','$time')";
    
    $result=mysqli_query($con,$insert);
        if($result){
           header('location:viewservicebooking.php');
            
        }
        else{
            echo"<center><p>Sorry booking failed</p></center>";
        }
    
}
?>