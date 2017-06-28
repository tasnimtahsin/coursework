<head>
    <style>
    form {
    border: 3px solid #f1f1f1;
}

input[type=text], input[type=password] {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}

button {
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
}

button:hover {
    opacity: 0.8;
}

.cancelbtn {
    width: auto;
    padding: 10px 18px;
    background-color: #f44336;
}

.imgcontainer {
    text-align: center;
    margin: 24px 0 12px 0;
}

.img.avatar {
    width: 40%;
    border-radius: 50%;
    text-align:center;
}

.container {
    padding: 16px;
}

span.psw {
    float: right;
    padding-top: 16px;
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
    span.psw {
       display: block;
       float: none;
    }
    .cancelbtn {
       width: 100%;
    }
}
        
    
    </style>
    
</head>
<?php
error_reporting('E_ALL^ E_NOTICE ');

$email = $_POST['email'];
$password = $_POST['password'];

if($email && $password){
   mysql_connect("localhost","root","") or die("could not connect to localhost");
    
    mysql_select_db("php") or die("could not connect to database");
    
    $query = mysql_query("select * from tasnim");


}
$numRow = mysql_num_rows($query);
if($numRow == 1){
 header('Location:  dashboard.php ');
}
else {
echo "sorry your email of password is wrong";
    
}
?>
   

   
   <html>
   <h1 class="h1">new member login</h1>
   <div class="img.avatar">
        <img src="img/avatar.jpg" /> 
   </div>
    <form  action="login.php" method="post">
<div class="container">
    <label><b>email</b></label>
    <input type="text" placeholder="Enter email" name="email" required>

    <label><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="password" required>
        
    <button type="submit">Login</button>
    <input type="checkbox" checked="checked"> Remember me
  </div>

  <div class="container" style="background-color:#f1f1f1">
    <button type="button" class="cancelbtn">Cancel</button>
    <span class="psw">Forgot <a href="#">password?</a></span>
  </div>
        
        
        
    
    
    
</html>