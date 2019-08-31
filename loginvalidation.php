<?php
session_start();
//header('location:index.php');
$con=mysqli_connect('localhost','root','');
mysqli_select_db($con,'resume');
$name = $_POST['name'];
$pass = $_POST['pass'];


$s = " select * from user where name='$name' and password='$pass'";

$result = mysqli_query($con, $s); 

$num = mysqli_num_rows($result);

if($num == 1){
	echo "Login Successful";
	header("localhost:8070/loginregistration/index.php");
}
else{
	echo "login failed";
}

?>