<head>
	
	<style>
	.form{
		background-color: lightblue;

		}
.submit{
	background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
}

}
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
    width: 40%;
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

if($_SESSION['username']){
    
    echo "<a href='logout.php'>Logout</a><br/>";
    echo "<a href='index.php'>Home</a><br/>";
    
    
   ?>
      
      
<?php
    include("connect.php");
    
if($_POST['submit']){
     $postTitle = $_POST['postTitle'];
  $postDec = $_POST['postDec'];
  $date = date("Y-m-d");  
    
    
  $username = $_SESSION['username'];
 
  $query2 = mysql_query("SELECT * FROM users WHERE username = '$username'");    
  $getRow = mysql_fetch_assoc($query2);

 $userID = $getRow['id'];
    
    
    
  $query3 = mysql_query("INSERT INTO posts VALUES('','$userID','$postTitle','$postDec','$date')");
    
    
    if($query3){
        echo "Successfully Insert";
    }
    else{
        echo "Not insert";
    }
}
    
 
    
?>
      
    
       


  
</form>
<form action="dashboard.php" method="post" class="form">
<div class="container">
	post Title:<input type="text" name="postTitle">
	post Descripton:<textarea name="postDec" cols="45" rows="10"></textarea>
	<input type="submit" name="submit" class="submit">
</div>
</form>






                   
               
       
        
    
    
 <?php   
    
}
else{
    header("location: login.php");
}









?>