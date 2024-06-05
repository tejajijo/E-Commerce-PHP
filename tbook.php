 <?php
include('connect.php');
if(isset($_POST['booknow'])){
    $tid=$_POST['tid'];
    $uname=$_POST['uname'];
    $pname=$_POST['pname'];
    $date=$_POST['date'];
    $time=$_POST['time'];
     $bdate=$_POST['bdate'];
    $btime=$_POST['btime'];
    $time1='';
    
    $insert="INSERT INTO testdrive(tid,uname,pname,date,time,bdate,btime) VALUES('$tid','$uname','$pname','$date','$time','$bdate','$btime')";
    $result=mysqli_query($con,$insert);
        if($result){
            echo'BOOKING COMPLETE..... WAIT FOR THE APPROVAL..';
            
        }
        else{
            echo"<center><p>Sorry booking failed</p></center>";
        }
    
}
?>