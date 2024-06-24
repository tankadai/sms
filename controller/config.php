<?php

$servername = "sql207.infinityfree.com";
$username   = "if0_36782022";
$password   = "IFQPapGNGIZ";
$dbname     = "if0_36782022_std_db";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
	
die("Connection failed: " . mysqli_connect_error());

}

?>
