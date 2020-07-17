<?php session_start();
require_once('dblogin.php');

// Code for login 
if(isset($_POST['login']))
{
$password=$_POST['password'];
$dec_password=$password;
$useremail=$_POST['uemail'];
$ret= mysqli_query($con,"SELECT * FROM registration WHERE email='$useremail' and password='$dec_password'");
$num=mysqli_fetch_array($ret);
if($num>0)
{
$extra="home.php";
$_SESSION['login']=$_POST['uemail'];
$_SESSION['id']=$num['id'];
$_SESSION['name']=$num['name'];
$host=$_SERVER['HTTP_HOST'];
$uri=rtrim(dirname($_SERVER['PHP_SELF']),'/\\');
header("location:home.php");
exit();
}
else
{
echo "<script>alert('Invalid username or password');</script>";
$extra="login.php";
$host  = $_SERVER['HTTP_HOST'];
$uri  = rtrim(dirname($_SERVER['PHP_SELF']),'/\\');
header("location:login.php");
exit();
}
}

?>