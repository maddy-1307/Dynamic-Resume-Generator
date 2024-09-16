<?php
$conn=mysqli_connect('localhost','root','','portfolio');
$did=$_GET['uid'];
$q="DELETE FROM `cocurricular` WHERE userdata_id='$did' ";
$r="DELETE FROM `Educatioin` WHERE userdata_id='$did'";
$s="DELETE FROM `skills` WHERE userdata_id='$did'";
$t="DELETE FROM `userdata` WHERE id='$did'";
$qr = mysqli_query($conn,$q);
$rr = mysqli_query($conn,$r);
$sr = mysqli_query($conn,$s);
$tr = mysqli_query($conn,$t);
header("location:portfolioupdate.php");

?>