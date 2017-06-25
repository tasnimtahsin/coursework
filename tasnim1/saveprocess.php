<?php
include("dbConfig.php");

$phone = $_POST['phone'];
$address = $_POST['address'];
$gender = $_POST['gender'];
$age = $_POST['age'];

/***** SQL For Insert Data *******/

mysqli_query($a, "INSERT INTO students(name, email, phone, gender, address, age) VALUES('".$_POST['name']."', '".$_POST['email']."', '$phone', '$gender', '$address', '$age')");

/***** For Redirection to following page *******/
header("Location:dashboard.php");


?>