<?php
session_start();

if($_SESSION['myEmail'] && $_SESSION['myPassword']){
    
    echo "Successfully Logn, and this is a admin area </br>";
    
    echo "<a href='logout.php'>Logout</a>";
    

}
else{
    header("location: login.php");
}


?>

