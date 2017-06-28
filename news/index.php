<head>
  
  <style>
    .body-area{
      background-color: lightblue;
    }
    .body-left{
      background-color: lightblue;
    }
  </style>
</head>
<?php include("header.php"); ?>
<?php include("connect.php"); ?>
      
       <h2>posts:</h2>
       <div class="body-area">

           <div class="body-left">
                
                
            <?php
                
            $query4 = mysql_query("SELECT * FROM posts ORDER BY id DESC");


            while($getRows = mysql_fetch_assoc($query4)){
                
                $dbPostTitle = $getRows['post_title'];   
                $dbPostDec = $getRows['post_dec']; 
                
                ?>
                
                    <div class="posts">
                    <a href="#">
                     <h3><?php echo $dbPostTitle; ?></h3>
                   
                     </a>
                     <p><?php echo $dbPostDec; ?></p>
                 </div>
                
                
                <?php
                 
            
            }


            ?>
                
                
                
                 
                 
           
                  
               
           </div>
           
          <?php include("footer.php"); ?>