<?php
error_reporting("E_ALL^E_NOTICE");
$username= $_POST['username'];
$password= $_POST['password'];
$email= $_POST['email'];

if($username && $password && $email){
  mysql_connect("localhost","root","")or die("could not connect to localhost");
    mysql_select_db("reg") or die('could not connect to database');
    
    $query =mysql_query("insert into user VALUES('','$username','$password','$email')");
        
        if($query){
        echo "successfully inserted";
    }
    else{
    echo "sorry please try again later";
    }

}

else{
echo "enter your username email and password";
}


?>
  

  
  
  
  
  
  <html>
   <form action="registration.php" method="post">
username: <input type="text" name="username"></br>
      password: <input type="password" name="password"></br>
email: <input type="email" name="email"></br>
      <input type="submit">            
       
       
       
       
   </form>  
    
    
    
    
</html>