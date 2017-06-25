<?php
error_reporting("E_ALL^E_NOTICE");
echo $email = $_POST['email'];
echo $password = $_POST['password'];

if($email && $password) {
  mysql_connect("localhost","root","") or die("could not connect to localhost");
  mysql_select_db("reg") or die("could not connect to database");  
    $query = mysql_query("select * from user where email= '$email' && password = '$password'");
    

}
echo $numrow = mysql_num_rows($query);
 
if($numrow == 1){
 echo"successfully login";
}

else{
echo"sorry, your email or password is wrong";
}



?>



<html>
 <form action="login.php" method="post">
     email: <input type="text" name="email"></br>
    password: <input type="password" name="password"></br>
    <input type="submit">
     
     
     
 </form>   
    
    
    
    
    
    
</html>