<?php
$servername = "localhost";
$username = "hddev_kristina";
$password = "what3v3r!";
$dbname = "hddev_tbw";
$to = "zwebster@okramail.deltastate.edu";
$subject = "New Prayer Request";
$fname = $_POST[fname];
$lname = $_POST[lname];
$famname = $_POST[famname];
$details = $_POST[details];
$message ="Person Requesting-".$fname." ".$lname."\nPrayer Request for ".$famname."\n".$details;


$conn = mysqli_connect($servername, $username, $password, $dbname);
	if (!$conn) {
		die("Connection failed: " . mysqli_connect_error());
	}
	
$sql = "INSERT INTO prayer (fname, lname, famname, details)
VALUES ('$_POST[fname]', '$_POST[lname]', '$_POST[famname]', '$_POST[details]')";

mail($to, $subject,$message);

if (mysqli_query($conn, $sql)) {

	echo "Your Prayer Request has been submitted. <a href='http://www.hddevelop.com/'>Back to website</a>";
} else {
	echo "Error: " . $sql . mysqli_error($conn);
}

mysqli_close($conn);
?>
