<?php
error_reporting('E_ALL^ E_NOTICE ');

  $username = $_POST['username'];
 $password = $_POST['password'];
 $email = $_POST['email'];    


if($username && $password && $email){
  // connect woth localhost
    mysql_connect("localhost","root","") or die("could not connect to localhost");
    
    //database connect
    mysql_select_db("reg")or die("could not connect to database");
    
    //insert data

    $query= mysql_query("insert into user values('','$username','$email','$password')");
    if($query){
     echo "successfully insert";
    }
    else{
        echo "could not insert please try again later";
    }
    
}
else{
 echo "enter your username, email and password";
}

?>
   

   
   
   
   <html>
    <form action="reg.php" method="post">
            
             
username:        <input type="text"name="username"/></br>
    email:   <input type="text" name="email" /></br>
 password:   <input type="text" name="password" /></br>
         <input type="submit"/>
          
        
        
    </form>
    
    
</html>