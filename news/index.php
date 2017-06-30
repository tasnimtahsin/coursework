<head>

  <style>
    .body-area{
      background-color: lightblue;
    }
    .body-left{
      background-color: lightblue;

    }
      .body-right{


    }
    .body-right ul{
    list-style: none;
}
    .body-right ul li{
    display: inline-block;
}
    .body-right ul li a{

    color: black;
    display: block;
    font-size: 20px;
    text-decoration: none;
}
    .body-right ul li a:hover{
    color:white;

}
  </style>

<script src="jquery-3.2.1.js"></script>
<script type="text/javascript">
    $(document).ready(function(){
        $('.dlt').click(function(){
          var getId = $(this).attr('id');
          var postData = {'id' : getId};
          console.log(getId);
            $.ajax({
                type: 'POST',
                url: 'delete.php',
                data: postData,
                success: function(data) {
                    //onsole.log(data);
                    $( ".post-container"+getId ).remove();
                }
            });
   });
});

</script>

<script type="text/javascript">
    $(".button").click(function() {
        console.log(this.name); 
    });  
</script>

<?php
function debug_to_console( $data ) {
    $output = $data;
    if ( is_array( $output ) )
        $output = implode( ',', $output);

    echo "<script>console.log( 'Debug Objects: " . $output . "' );</script>";
}
?>

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
                $dbPostId = $getRows['id'];
                debug_to_console( "Inside index.php: ");
                debug_to_console( $dbPostId );
                ?>

                <?php
                  echo "<div id='" . $dbPostId . "' class='post-container" . $dbPostId . "' value='" . $dbPostId . "'>";
                ?>
                <div class="body-right">
                <ul>
                  <li>
                    <?php
                      echo "<button id='" . $dbPostId . "' class='dlt' value='" . $dbPostId . "' name='delete'>Delete</>";
                    ?>
                  </li>
                  <li>
                    <?php
                      echo "<button class='button' value='" . $dbPostDec . "' name='update'>Update</>";
                    ?>                    
                  </li>
                  </ul>
                </div>

                <div class="posts">
                    <a href="#">
                     <h3><?php echo $dbPostTitle; ?></h3>

                     </a>
                     <p><?php echo $dbPostDec; ?></p>
                </div>
                </div>

            <?php
            }
            ?>








           </div>

          <?php include("footer.php"); ?>
