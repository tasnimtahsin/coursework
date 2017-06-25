<?php
error_reporting("E_ALL^E_NOTICE");
$username= $_POST["username"];
$password= $_POST["password"];
$email= $_POST["email"];
$phone= $_POST["mobile"];
$age= $_POST["age"];

if($username && $password && $email && $phone && $age){
   
    mysql_connect("localhost","root","") or die("could not connect to localhost");
    
    mysql_select_db("php") or die("could not connect to database");
    
    $query = mysql_query("insert into info VALUES('','$username','$password','$email','$phone','$age')");
    
    if($query){
        echo "successfully inserted";
    
    }
    else{
    echo "sorry could not insert";
    }
}

else{
echo "enter all fill";
}

?>
   

   
   
   
   <html>
    <form action="registration.php" method="post">
username:<input type="text" name="username"></br>
email:<input type="text" name="email"></br>
password:<input type="password" name="password"></br>
phone:<input type="text" name="mobile"></br>
age:<input type="text" name="age"></br> 
        <input type="submit">                                       
                     
        
        
    </form>
    
    
</html>