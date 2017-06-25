<?php
error_reporting("E_ALL^E_NOTICE");
$date= date("Y-m-d");

$username= $_POST['username'];
$password= $_POST['password'];
$email= $_POST['email'];

if($username &&  $email && $password){

    mysql_connect("localhost","root","") or die("could not connect to mysql");
    
    mysql_select_db("tasnim1") or die("could not connect to database");
    
    
    
  $query=  mysql_query("INSERT INTO info VALUES('','$username','$password','$email','$date')");
      
      if($query){
        echo "succesfully inserted";
      }
    else{
       echo "sorry could not insert it";
    }
   
    
}
else{
echo 'enter your username, email and password';
}

?>




























<html>
 
  
  
  <form action="reg.php" method="post">
   username:  <input type="text" name="username"></br>
password:    <input type="password" name="password"></br>
    email: <input type="text" name="email"></br>
    <input type="submit">
     
     </form>
    
    
    
</html>


