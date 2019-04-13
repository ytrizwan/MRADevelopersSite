<?php
session_start();
require( "admin/config/db.php" );
//characters from Database is fixed
mysqli_set_charset( $conn, "utf8mb4" );

$name = $_SESSION["commentName"];
$comment = $_SESSION["commentMessage"];
$postID = $_SESSION["postID"];
if ( $name == null ) {
	$name = "Anonymous";
}

$insert = "INSERT INTO mra_comments(id_post_fk, comments, names_comnt)
			VALUE($postID , '$comment', '$name')";

$run = mysqli_query( $conn, $insert );
if ( $run ) {
	$link = "'"."openPostDetails.php?id=".$postID."'";
	echo "<script>alert('Your comment Inserted Successfully')</script>";
	echo "<script>window.open($link, '_self');</script>";
} else {
	echo "<script>alert('Your comment Inserted Unsuccessfully')</script>";
}

session_unset();
session_destroy();
?>

















