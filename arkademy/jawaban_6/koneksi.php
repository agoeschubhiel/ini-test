<?php
	$server="localhost";
	$username="root";
	$pass="";
	$dbname="db_blog";
	$conn=mysqli_connect($server,$username,$pass,$dbname);

	if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
	}
		echo "";
?>