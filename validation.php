<?php
session_start();
header('location:login.php');
$con = mysqli_connect('localhost','root');
if($con){
	echo "connection successfull";
}else{
	echo "connection failed";
}

mysqli_select_db($con,'cyber');
$name = $_POST['username'];
$pass = $_POST['password'];

$q ="select * from  user where name ='$name' && password = '$pass'";
$result = mysqli_query($con, $q);
$num = mysqli_num_rows($result);
if($num == 1){
	$_SESSION['username'] = $name;
	header('location: index.php');
}else{
	header('location:login.php');
}



?>
