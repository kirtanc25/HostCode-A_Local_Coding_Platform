<?php
//session_start();
$con=mysqli_connect("localhost","root","","reg");
$email=$_SESSION["email"];
$em=mysqli_query($con,"select name from user where email='".$email."'");
$name=mysqli_fetch_row($em)[0];
$pid=$_SESSION['pid'];
mysqli_query($con,"insert into submissions(sname,pid,status) values('$name',$pid,0)");
?>