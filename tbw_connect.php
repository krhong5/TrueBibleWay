<?php
$servername = "localhost";
$username = "hddev_kristina";
$password = "what3v3r!";
$dbname = "hddev_tbw";

$conn = mysqli_connect($servername, $username, $password, $dbname);
	if (!$conn) {
		die("Connection failed: " . mysqli_connect_error());
	}

/* mysqli_close($conn); */
?>
