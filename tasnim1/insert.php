<?php include("dbconfig.php") ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>tasnims database</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <style>
        .container{
            background-color:aqua;
        }
        body {
    font-family: "Lato", sans-serif;
}

.sidenav {
    height: 100%;
    width: 0;
    position: fixed;
    z-index: 1;
    top: 0;
    left: 0;
    background-color: #111;
    overflow-x: hidden;
    transition: 0.5s;
    padding-top: 60px;
}

.sidenav a {
    padding: 8px 8px 8px 32px;
    text-decoration: none;
    font-size: 25px;
    color: #818181;
    display: block;
    transition: 0.3s
}

.sidenav a:hover, .offcanvas a:focus{
    color: #f1f1f1;
}

.sidenav .closebtn {
    position: absolute;
    top: 0;
    right: 25px;
    font-size: 36px;
    margin-left: 50px;
}

@media screen and (max-height: 450px) {
  .sidenav {padding-top: 15px;}
  .sidenav a {font-size: 18px;}
}
    
    
    </style>
    </head>
  
<body> 
    <div class="container">
       <h1>be a member of us</h1>
        <div class="row">
<!-- FORM START-->
         <form method="post" action="saveProcess.php">
           <div class="form-group">
           <label for="usr">Name:</label>
           <input type="text" class="form-control" id="name" name="name" value="">
           </div>
           <div class="form-group">
           <label for="pwd">E-mail:</label>
           <input type="email" class="form-control" id="email" name="email" value="">
           </div>
		   
		   <div class="form-group">
           <label for="pwd">Phone:</label>
           <input type="text" class="form-control" id="phone" name="phone" value="">
           </div>
		   
		   <div class="form-group">
           <label for="pwd">Address:</label>
           <input type="text" class="form-control" id="text" name="address" value="">
           </div>
		   
         
           <div class="form-group">
           <h4>Gender:</h4>
           <label class="checkbox-inline">
           <input type="radio" name="gender" value="Male">Male
           </label>
           <label class="checkbox-inline">
           <input type="radio" name="gender" value="Female">Female
           </label>
           </div>
           <div class="form-group">
           <label for="pwd">Age:</label>
           <input type="text" class="form-control" id="text" name="age" value="">
           </div>
           <div class="form-group">
           <button class="btn btn-success cls" type="submit">Submit</button> <button type="button" class="btn btn-default" data-dismiss="modal" style="float:right">Close</button>
		   </div>
        </form>
            </div>
    </div>
    </body>
</html>