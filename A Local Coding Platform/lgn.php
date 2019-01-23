<?php
session_start();
if(isset($_POST['email']) && $_POST['email']!='' && isset($_POST['pwd']) && $_POST['pwd']!='' )
{
$email=$_POST['email'];

$pwd=$_POST['pwd'];
//$fname=$_GET['fname'];
$con = mysqli_connect("localhost","root","","reg");
$r=mysqli_query($con,"select * from user where email='$email' and pass='$pwd'");
//session["uname"]=$uname;
    if (mysqli_num_rows($r)==1){
        $_SESSION["email"]=$email;
        header("location:dashboard.php");
        
}else
 header("location:login.php?q=invalid");
}
else
{
    header("location:login.php?q=invalid");
}
?>