<?php
  error_reporting('E_ALL^E_NOTICE');
    
 $username = $_POST['tasnim'];
 $password = $_POST['tasnimtahsin'];

if($username && $password){
    
    mysql_connect("localhost","root","") or die("could not connect to localhost");
    
    mysql_select_db("reg") or die("failed to connect to database");
    
    
    
    $query = mysql_query("select * from user where username ='$username' AND password = '$password' ");
    
    
    $numRows = mysql_num_rows($query);
    
    if($numRows == 1){
        echo 'succesfully login';
    }
    else{
        echo 'username or password is wrong';
    }
    
    
    
    
    
    
    
    
    
}
else{
echo "enter the username and password";
}


?>
  <h1>Login Page</h1>
   
   <html>
    <form action="index.php" method="POST">
       
        username = <input type="text" name="tasnim" /><br>
        password = <input type="password" name ="tasnimtahsin" /> <br>
        <input type="submit"/>
         
        
    </form>
    
    
</html>