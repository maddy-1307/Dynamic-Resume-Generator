<?php
$conn=mysqli_connect('localhost','root','','assign1');
$did=$_GET['id'];
$d="DELETE FROM `abc` where id='$did'";
$dr=mysqli_query($conn,$d);
header("location:assignment.php");
?>