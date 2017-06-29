<?php

include("dbconfig.php");

$id = $_POST['id'];

debug_to_console( "Inside delete.php: ");
debug_to_console( $dbPostId );

mysqli_query($a,"DELETE FROM `posts` WHERE `id`='$id'");

header("location:index.php");

?>

<?php
function debug_to_console( $data ) {
    $output = $data;
    if ( is_array( $output ) )
        $output = implode( ',', $output);

    echo "<script>console.log( 'Debug Objects: " . $output . "' );</script>";
}
?>
