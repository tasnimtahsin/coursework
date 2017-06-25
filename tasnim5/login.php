<?php
session_start();
error_reporting("E_ALL^E_NOTICE");

echo $email = $_POST['email'];
echo $password = $_POST['password'];

if($email && $password){

    mysql_connect("localhost","root","") or die ("could not connect to localhost");
    
    mysql_select_db("tasnim1") or die ("could not connect to database");
    
    $query = mysql_query("select * from php where email='$email' and password ='$password'");
    
    
}

echo $numRows = mysql_num_rows($query);

if($numRows == 1){
    
    $_SESSION['myemail']  = $email;
 
    header("location: admin.php");
     
}

else{
echo "your email and password is wrong";
}

?>
   

   
   <html>
    <form action="login.php" method="post">
email: <input type="text" name="email"></br>
    password: <input type="password" name="password"></br>
       <input type="submit">       
        
        
    </form>
</html>