<?php session_start(); ?>
<?php error_reporting("E_ALL^E_NOTICE"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>News Paper</title>
    <link rel="stylesheet" type="text/css" href="css/style.css" />
</head>
<body>
   <div class="main-body">
       <div class="header-area">
        <a href="#">
            <h1>
                Newspaper
            </h1>
        </a>
           
       </div>
       <div class="menu-area">
           <ul>
               <li><a href="#">Home</a></li>
               <li><a href="#">Abroad News</a></li>
               <li><a href="#">Bangladesh News</a></li>
               <li><a href="#">Fun</a></li>
               <li><a href="#">Sports</a></li>
               <li><a href="#">Contact Us</a></li>
               
               <?php 
                    if($_SESSION['username']){
                    echo "<li><a href='dashboard.php'>Dashboard</a></li>";
                        
                        echo "<li><a href='logout.php'>Logout</a></li>";
                    }
                    else{
                        echo "<li><a href='login.php'>Login</a></li>";
                    }
                ?>
               
               
               
               
           </ul>
       </div>