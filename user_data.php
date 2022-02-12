<?php

session_start();


$name = $_POST['Name'];
$mail = $_POST['Mail'];
$phone = $_POST['Phone'];

if (isset($_POST['category'])) {
   	$category = $_POST['category'];
   }
if (isset($_POST['hidden1'])) {
   	$score = $_POST['hidden1'];
   }

$conn = new mysqli("localhost","root","","register");
  
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " 
        . $conn->connect_error);
}
  
$sqlquery = "INSERT INTO user_score_table (User_Name, Mail_ID, Phone_Number, Category_Type, User_Score) VALUES ('$name','$mail','$phone','$category','$score')";
  
if ($conn->query($sqlquery) === TRUE) {
    header('location:Activity.html');
} else {
    header('location:Activity.html');
}
?>

