<?php

session_start();

$con = mysqli_connect('localhost','root','');
mysqli_select_db($con,'register');

$name = $_POST['uname'];
$pass = $_POST['pwd'];
$mail = $_POST['mail'];

$s = "select * from user_registration where uname = '$name' && pwd = '$pass' && mail = '$mail'";

$result = mysqli_query($con,$s);

$num = mysqli_num_rows($result);

if($num == 1){
	header('location:home.html');
}else{
	header('location:Login.html');
}
?>