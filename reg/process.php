<?php
$username = $_POST['usernamehere'];
$password = $_POST['passwordhere'];

if($username && $password){
       //databse connect
    mysql_connect("localhost","root","") or die("could not connect to localhost");
    
    mysql_select_db("reg") or die("could not connect to database");
    
    $query = mysql_query("select * from user");
}
$numRow = mysql_num_rows($query);
if($numRow == 1){
    echo "succesfully login";
}
else{
    echo "sorry, your username or password is wrong";
}




?>