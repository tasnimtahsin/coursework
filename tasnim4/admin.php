<?php
session_start();
if($_SESSION['myEmail'] && $_SESSION['myPassword']){
 echo "successfully login, and this is an admin area </br>";
    
    echo "<a href='logout.php'>logout</a>";
}
else{
header('location: login.php');
}

?>