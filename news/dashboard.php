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
      
      
      
       
       
 <form action="dashboard.php" method="post">  
  Post title: <input type="text" name="postTitle" />
  <p>
  Post Description: <textarea name="postDec" cols="45" rows="10"></textarea>
   <p>
   
   <input type="submit" name="submit" value="Post"/>
    
              
     </form>                     
               
       
        
    
    
 <?php   
    
}
else{
    header("location: login.php");
}









?>