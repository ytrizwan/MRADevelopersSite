<?php
//PHP Code for Page Numbers (1/4)
$results_per_page = 05; 
$datatable = "mra_post";

//Database Conneciton
$conn = mysqli_connect("localhost", "root", "pass", "mradb")
		or die("mySQL server conneciton is failed");
?>