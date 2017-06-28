<head>
    <style>
form {
    border: 3px solid #f1f1f1;
    background-color: lightblue;
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

img.avatar {
    
    border-radius: 50%;
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
session_start();
    error_reporting("E_ALL^E_NOTICE");
    $username = $_POST['username'];
    $password = $_POST['password'];
    
    include("connect.php");

    $query = mysql_query("SELECT * FROM users WHERE username='$username' AND password='$password'");


    $rows = mysql_num_rows($query);

    if($rows == 1){
        $_SESSION['username'] = $username;
        
        header("location: dashboard.php");
        
        
        
    }
    else{
        echo "Sorry, username or password is wrong";
    }


?>
   
 <form action="login.php" method="post">
  <div class="imgcontainer">
    <img src="img_avatar3.png" alt="Avatar" class="avatar" width="200px" height="200px">
  </div>

  <div class="container">
    <label><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="username" required>

    <label><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="password" required>
        
    <button type="submit" name="submit" value="Login">Login</button>
    <input type="checkbox" checked="checked"> Remember me
  </div>

  <div class="container" style="background-color:#f1f1f1">
    <button type="button" class="cancelbtn">Cancel</button>
    <span class="psw">Forgot <a href="#">password?</a></span>
  </div>
</form>
