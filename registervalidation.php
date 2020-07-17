<?php
include_once "./dbsignup.php";



if(isset($_POST['signup']))
{
	$name=$_POST['name'];
	$email=$_POST['email'];
	$gender=$_POST['gender'];
	$num=$_POST['num'];
	$password=$_POST['password'];
	$enc_password=$password;
$sql=mysqli_query($conn,"select id from registration where email='$email'");
$row=mysqli_num_rows($sql);
if($row>1)
{
	echo "<script>alert('Email id already exist with another account. Please try with other email id');</script>";
} else{
	$msg=mysqli_query($conn,"insert into registration(name,email,gender,num,password) values('$name','$email','$gender','$num','$enc_password')");

if($msg)
{
	echo "<script>alert('Register successfully');</script>";
	header("Location: login.php");

}
}
}



/*
$name=$_POST["name"];
$email=$_POST["email"];
$gender=$_POST["gender"];
$num=$_POST["num"];
$password=$_POST['password'];


$sql="Insert into registration(name,email,gender,num,password) values('$name','$email','$gender','$num','$password')";
//execute query command
$checkResult= mysqli_query($conn, $sql);

if($checkResult){
    echo "Successfully entered!";
    header("Location: login.php");
 }
else{
     echo "Unsuccessful!!";
 }
// echo $name;
// echo $email;
// echo $phone;
// echo $type;

*/


?>


