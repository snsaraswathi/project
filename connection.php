<?php
	
$servername = "localhost";
$dbhost = "107.180.2.9";
$dbuser = "saraswathi";
$dbpass = "12345";
$db = "loginDb";

	$conn=mysql_connect($servername,$dbuser,$dbpass);
	mysql_select_db($db);

//$servername = "localhost";
//$username = "saraswathi";
//$password = "12345";
//$dbname = "loginDb";


// Create connection
//$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
//if ($conn->connect_error) {
//    alert('connection failed ');
//} 




?>