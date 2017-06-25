<?php include("dbconfig.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>transformers</title>
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

<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <a href="insert.php">be a member of us</a>
  <a href="list.php">total member</a>
  <a href="#">faq</a>
  <a href="#">Contact</a>
</div>


<span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; open</span>

<script>
function openNav() {
    document.getElementById("mySidenav").style.width = "250px";
}

function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
}
</script>
      <div class="container">
<div class="row" style="background-color: lightblue; height: 100px;">

</div>
       
     <!DOCTYPE html>
   <html>
    <head>
        <title>Transformers</title>
        <link rel="stylesheet" type="text/css" href="css/flexslider.css" />
        <link rel="stylesheet" type="text/css" href="css/style.css" />
    </head>
    
    <body>
        <div class="container headerarea">
           <div class="logoarea">
               <img src="img/logo.png" />
               
           </div>
           <div class="navigationarea">
               <div class="searcharea">
                   <input type="text" name="search" placeholder="Search" />
                   <input type="button" name="Search" value="Search" />
               </div>
               <div class="navbararea">
                   <ul>
                       <li><a href="#">Home</a></li>
                       <li><a href="#">About Us</a></li>
                       <li><a href="https://www.facebook.com/profile.php?id=100014484572399">Follow Us</a></li>
                       <li><a href="#">FAQ</a></li>
                       <li><a href="#">Download</a></li>
                   </ul>
               </div>
           </div>
            
            
        </div>
           
        <div class="container sliderarea">
            <div class="flexslider">
              <ul class="slides">
                <li>
                  <p class="flex-caption">dinobots</p>
                  <img src="img/all%20dinobots.PNG" width="890px" height="400px" />
                 
                </li>
                <li>
                 <p class="flex-caption">bumble bee autobot</p>
                  <img src="img/auto%20bot%20boumblebee.PNG" width="890px" height="400px"/>
                  
                </li>
                <li>
                 <p class="flex-caption">crosshairs autobot</p>
                  <img src="img/auto%20bot%20cross%20hair.PNG" width="890px" height="400px"/>
                  
                </li>
                <li>
                 <p class="flex-caption">drift autobot</p>
                  <img src="img/auto%20bot%20drift.PNG" width="890px" height="400px" />
                  
                </li>
                <li>
                 <p class="flex-caption">hound autobot</p>
                  <img src="img/auto%20bot%20hound.PNG" width="890px" height="400px"/>
                  
                </li>
                <li>
                  <p class="flex-caption">optimus prime autobot</p>
                  <img src="img/optimus%20prime%20autobot.PNG" width="890px" height="400px" />
                 
                </li>
              </ul>
            </div>
            
        </div>
           
        <div class="container bodytoparea">
            <h3>Decepticon</h3>
            <div class="imagearea">
                <img src="img/decepticon%20barricade.PNG" />
            </div>
            <div class="imagearea">
                <img src="img/decepticon%20stinger.PNG"/>
            </div>
            <div class="imagearea">
                <img src="img/galvatron.PNG"/>
            </div>
            <div class="imagearea">
                <img src="img/lockdown.PNG"/>
            </div>
            <div class="imagearea">
                <img src="img/megatron.PNG"/>
            </div>
            <div class="imagearea">
                <img src="img/the%20fallen.PNG"/>
            </div>
            
        </div>
           
        <div class="container bodybottomarea">
            <div class="bodytoppicturearea">
                <img src="img/transformers.PNG"/>
            </div>
            <div class="textarea">
                <p>An ancient struggle between two Cybertronian races, the heroic Autobots and the evil Decepticons, comes to Earth, with a clue to the ultimate power held by a teenager.the decepticon and the autobots had a battle. the autobots won all.in the revenge of the fallen optimus died.then sam searched for the matrix. the legendary key.he found it.and the it came to sand.then sam died.then he reborned.he gave the matrix to optimus spark. optimus is live again.he killed the fallen.optimus rises. he falls. megatron has nothing to do but to retreat.and he said. this isnt over.</p>
            </div>
            
        </div>
           
        <div class="container footertoparea">
            developed by tasnim tahsin &copy; copy right.
            
        </div>
           
        <div class="container footerbottomarea">
            follow us at 
            
            <img src="img/facebook.png" />
            <img src="img/twitter.png" />
        </div>
    
        <script type="text/javascript" src="js/jquery-3.1.1.min.js"></script>
        <script type="text/javascript" src="js/jquery.flexslider.js"></script>
        <script type="text/javascript" src="js/own.js"></script>
                                
    </body>
    
</html>
        
        
        
         
          


    
    
     
    </body> 