<?php
error_reporting("E_ALL^E_NOTICE")

 mysql_connect("localhost","root","") or die("could not connect to localhost");
        mysql_select_db("php") or die("could not connect to database");


  error_reporting("e_all^ e_notice");
$firstName = $_POST['firstname'];
$lastname = $_POST['lastname'];
$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];
$age = $_POST['age'];


$passwordlen = strlen($password);


 
if($passwordlen< 5){
echo "enter password moere than 5 digits";
}
else{

    if($firstName  && $password && $email && $lastname && $username && $age){
    
       
      $query=  mysql_query("insert into tasnim values('','$firstname', '$lastname','$username','$email', '$password', '$age' ) ");
        
        if($query){
         echo "succesfully inserted";
        }
        else{
        echo "could not insert";
        }
        
    }
    else{
    echo "enter all the fills";
    }
    
    
    
}

?>
   

   
   
   
   
   
   <html>
    <form action="registration.php" method="post">
        
First name:<input type="text" name="firstname"/></br>
    Last name:<input type="text" name="lastname"/></br>
      Username:<input type="text" name="username"/></br>
      Email:<input type="email" name="email"/></br>
      Pasword:<input type="password" name="password"/></br> 
       Age:<input type="text" name="age"/></br>
       <input type="submit"/></br>
        
        
        
    </form>
    
    
    
</html>