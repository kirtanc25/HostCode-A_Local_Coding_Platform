<?php
//session_start();
if(isset($_POST['email']) && $_POST['email']!=''  && isset($_POST['uname']) && $_POST['uname']!='' && isset($_POST['pwd']) && $_POST['pwd']!='' )
{
$email=$_POST['email'];
$uname=$_POST['uname'];
$pwd=$_POST['pwd'];
//$fname=$_GET['fname'];
$con = mysqli_connect("localhost","root","","reg");
    $em=mysqli_query($con,"select * from user where email='".$email."'");
    //echo mysqli_num_rows($em);
    if(mysqli_num_rows($em)==0){
$r=mysqli_query($con,"insert into user values('$uname','$pwd','$email')");
//session["uname"]=$uname;
header("location:dashboard.php?q=valid");
}else{
        header("location:sign.php?q=already");
    }}
else
{
    header("location:sign.php?q=invalid");
}
?>
