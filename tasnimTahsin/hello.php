<?php
 error_reporting('E_ALL^E_NOTICE');

  $username = $_POST['username'];
 $password = $_POST['password'];

if(username && password){
    
    mysql_connect("localhost","root","") or die("could not connect to localhost");
    
    mysql_select_db("reg") or die("failed to connect to database");
      
    $query = mysql_query("select * from user where username ='$username' AND password ='$password'");
    
    $numRows = mysql_num_rows($query);
    
    if($numRows == 1){
        echo "succesfully login" ;
    }
    
    else{
        echo "enter the correct username and password";
    }
    
    
}



?>
<h1>login page</h1>


<html>
    <form action="hello.php" method="post">
        username = <input type="text" name="username" /></br>
    password = <input type="password" name="password" />
</br>
       <input type="submit"/>       
        
    </form>
    
    
    
</html>