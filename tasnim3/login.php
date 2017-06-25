<?php
session_start();
error_reporting("E_ALL^E_NOTICE");
 $email =$_POST['email'];
  $password =$_POST['password'];

if($email && $password){
 
    mysql_connect("localhost","root","") or die ("could not conenct to localhost");
    
    mysql_select_db("php") or die ("could not login to databas or your email or password is wrong");
    
    
    $query = mysql_query("select * from info where email= '$email' and password = '$password'");
    
   
    
}
echo $numRows = mysql_num_rows($query);

if($numRows == 1){
    
    $_SESSION['myEmail'] = $email;
    $_SESSION['myPassword'] = $password;
    
    header("location: admin.php");

}
else{
echo "enter your email and pasword correct";
}


?>
   

   
   
   <html>
    <form action="login.php" method="post">
        email: <input type="text" name="email"></br>
password: <input type="password" name="password"></br> 
       <input type="submit">       
        
        
    </form>
    
</html>