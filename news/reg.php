
<head>





	<style>
	
	.submit{
		background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
	}
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

.submit:hover {
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
<body>



</head>
<?php
error_reporting("E_ALL^E)_NOTICE");
$username= $_POST['username'];
$password= $_POST['password'];
$email= $_POST['email'];

if ($username && $password && $email) {


	mysql_connect("localhost","root","") or die("could not connect to database");
	mysql_select_db("news") or die("could not connect to database");

	$query= mysql_query("INSERT INTO users VALUES('','$username','$password','$email')");


			if ($query) {
				echo"you are signed up!";

			}
			else{
				echo "sorry there might be problem for not signing in. pleae try it later.";

			}

}

 				else{
 					echo "enter your username, email and password.";
 				}


?>
<html>
<div class="menu-area">
	<ul>
<li><a href="index.php">home</a></li>
</ul>
</div>

<form action="reg.php" method="post">
<div class="imgcontainer">
    <img src="img_avatar3.png" alt="Avatar" class="avatar" width="200x" height="200px">
  </div>
	username: <input type="text" name="username"></br>
	password: <input type="password" name="password"></br>
	email: <input type="text" name="email"></br>
	<input type="submit" class="submit">
</form>

</html>
