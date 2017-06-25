<?php
session_start();
    error_reporting("E_ALL^E_NOTICE");
    $username = $_POST['username'];
    $password = $_POST['password'];
    
    include("connect.php");

    $query = mysql_query("SELECT * FROM users WHERE username='$username' AND password='$password'");


    $rows = mysql_num_rows($query);

    if($rows == 1){
        $_SESSION['username'] = $username;
        
        header("location: dashboard.php");
        
        
        
    }
    else{
        echo "Sorry, username or password is wrong";
    }


?>
   

   
   
   <form action="login.php" method="post">
    
    Username : <input type="text" name="username" />
    <br/>
    Password: <input type="password" name="password" />
    <br/>
    
    <input type="submit" name="submit" value="Login" />
    
</form>