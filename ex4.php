<!-- Create a Database using PHP and MySQL. -->

<?php
	$servername = "localhost";
	$username = "root";
	$password = "" ;
	$dbname = "databaseTest";
	// Create connection
	$conn = mysqli_connect($servername, $username, $password);
	// Check connection
	if (!$conn) {
	   die("Connection failed: "  . mysqli_connect_error());
	}
	// Create database
	$sql = "CREATE DATABASE $dbname";
	if  (mysqli_query($conn, $sql)) {
	   echo "Database $dbname created successfully! \n";
	} else {
	   echo "Error creating database $dbname: " . mysqli_error($conn);
	}
	mysqli_close($conn);
?>