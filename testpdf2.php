<?php
include('connect.php');
session_start();
$uname=$_SESSION['uname'];
$tid=$_POST['tid'];
if(isset($_POST['getpdf'])){
    $query="SELECT * FROM testdrive INNER JOIN signin ON testdrive.uname=signin.uname WHERE testdrive.tid='".$tid."'";
    $run=mysqli_query($con,$query);
    while($row=mysqli_fetch_array($run)){
        $tid=$row['tid'];
        $uname=$row['uname'];
        $email=$row['email'];
        $contact=$row['contact'];
        $bdate=$row['bdate'];
        $btime=$row['btime'];
        $pname=$row['pname'];
        $date=$row['date'];
        $time=$row['time'];
        $status=$row['status'];
    }
}
?>
<html lang="en">
  <head>
    <meta charset="utf-8">
      <link rel="icon"  href="ic.png">
    <title>TESTDRIVE</title>
    <link rel="stylesheet" href="style.css" media="all" />
  </head>
  <body>
    <header class="clearfix">
      <h1>TEST DRIVE BOOKING RECEPT</h1>
      <div id="project">
        <div><span>RECEPT NO</span> <?php echo rand(1000,100000)?></div><br>
        <div><span>TEST ID</span> <?php echo $tid?></div><br>
        <div><span>USER NAME</span><?php echo $uname?></div><br>
          <div><span>EMAIL</span><?php echo $email?></div><br>
        <div><span>CONTACT</span><?php echo $contact?></div><br>
      </div>
    </header>
    <main>
      <table>
        <thead>
          <tr>
            <th >BOOKED DATE</th>
              <td ><?php echo $bdate?></td>
              </tr>
            <tr>
            <th >BOOKED TIME </th>
                <td ><?php echo $btime?></td>
                </tr>
            <tr>
            <th>BIKE BOOKED</th>
                <td ><?php echo $pname?></td>
                  </tr>
            <tr>
            <th>DATE SELECTED FOR TESTDRIVE</th>
                 <td ><?php echo $date?></td>
                  </tr>
            <tr>
            <th>TIME SELECTED FOR TESTDRIVE</th>
                <td ><?php echo $time?></td>
                  </tr>
            <tr>
            <th>STATUS</th>
                <td ><?php echo $status?></td>
          </tr>
        </thead>
        </table>
    </main>
    <footer>
        Thanks for choosing Royal Bajaj Adimaly as your test drive center.<br><br>
        <b> NOTE:</b>Please show this recept while you come for the testdrive
    </footer>
  </body>
</html>
