<?php
include("dbConfig.php");

$id = $_GET['id'];

mysql_query("DELETE FROM students WHERE id='$id'");

header("Location:index.php");

?>