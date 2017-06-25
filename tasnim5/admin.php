<?php
if($_SESSION['myemail']){


echo "<h1>this is an admin area, successfully login</h1>";


echo "<a href='logout.php'>logout</a>";
    
}
else{
header("location: login.php");
}
    ?>