<?php
$servername = "localhost";
$username = "hddev_kristina";
$password = "what3v3r!";
$dbname = "hddev_tbw";
$to = "khong1@okramail.deltastate.edu";
$subject = "New DVD Purchase Order";
$name = $_POST[name];
$address = $_POST[address];
$city = $_POST[city];
$zip = $_POST[zip];
$dos = $_POST[dos];
$sunday = $_POST[sunday];
$special = $_POST[special];
$payment = $_POST[payment];

echo "Sunday: " . $sunday . "<br>";
echo "Special: " . $special . "<br>";

/* if ($sunday = "yes") {
echo "sunday is checked!<br>";
}

if ($special = "yes"){
echo "special is checked!<br>";
} */

/* $message ="Name-".$name."\nAddress-".$address."\nCity-".$city."\nZip Code".$zip."\nDate of Sermon-".$dos."\nSunday Sermon-".$sunday."\nSpecial Sermon-".$special."\nPayment Type-".$payment; */


$conn = mysqli_connect($servername, $username, $password, $dbname);
	if (!$conn) {
		die("Connection failed: " . mysqli_connect_error());
	}
	
$sql = "INSERT INTO dvd_purchase (name, address, city, state, zip, dos, sunday, special, payment)
VALUES ('$_POST[name]', '$_POST[address]', '$_POST[city]', '$_POST[state]', '$_POST[zip]', '$_POST[dos]', '$_POST[sunday]', '$_POST[special]', '$_POST[payment]')";

# mail($to, $subject, $message);

if (mysqli_query($conn, $sql)) {
	echo "New record created successfully. <a href='http://www.hddevelop.com/'>Back to website</a>";
} else {
	echo "Error: " . $sql . mysqli_error($conn);
}

mysqli_close($conn);
?>
