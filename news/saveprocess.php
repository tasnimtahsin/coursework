<?php
inclued("dbconfig.php");


$username= $_POST['username'];
$password= $_POST['password'];
$email= $_POST['email'];


mysqli_connect($a,"INSERT INTO news(uername,password,email) VALUES('".$POST['username']."','".$_POST['ssh2_auth_password(session, username, password)']."','".$_POST['email']."')");

