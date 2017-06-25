<?php
include("dbConfig.php");

$phone = $_POST['phone'];
$address = $_POST['address'];
$gender = $_POST['gender'];
$age = $_POST['age'];

mysql_query("INSERT INTO students(name, email, phone, gender, address, age) VALUES('".$_POST['name']."', '".$_POST['email']."', '$phone', '$gender', '$address', '$age')");

header("Location:index.php");


?>