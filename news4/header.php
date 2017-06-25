<?php session_start(); ?>
<?php error_reporting(E_ALL^E_NOTICE ); ?>
<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="utf-8">
    <title>News Paper</title>
    <link rel="stylesheet" type="text/css" href="css/style.css" />
</head>


<body>
    <div class="main-body">
        <div class="header-area">
           <a href="#">
            <h1>
                newspaper
            </h1> 
            </a>
        </div>
        <div class="menu-area">
            <ul>
                <li><a href="#">home</a></li>
                <li><a href="#">abroad news</a></li>
                <li><a href="#">bangladesh news</a></li>
                <li><a href="#">fun</a></li>
                <li><a href="#">sports</a></li>
                <li><a href="#">contact us</a></li>
                
                <?php
                if($_SESSION ['username']){
                echo "<li><a href="dashboard.php">dashboard</a></li>";
                    echo "<li><a href="logout.php">logout</a></li>";
                }
                else{
                echo "<li><a href="login.php">login</a></li>";
                }
                ?>
            </ul>
        </div>
    