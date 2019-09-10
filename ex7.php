<?php
echo ("<html><body>");
$servername = "localhost" ;
$username = "root";
$password = "";
$dbname = "databaseTest";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if  (!$conn) {
   die("Connection failed: " . mysqli_connect_error() . "\n" );
}

// Escape user inputs for security
$first_name = mysqli_real_escape_string($conn, $_POST['firstname']);
$last_name = mysqli_real_escape_string($conn, $_POST[ 'lastname']);
$email = mysqli_real_escape_string($conn, $_POST['email']);
if($first_name != '' && $last_name != ''){
	$sql = "INSERT INTO Users (firstname, lastname, email) VALUES ('$first_name', '$last_name', '$email')";
	if (mysqli_query($conn, $sql)) {
    	echo "<h1>New record created.<h1>";
	} else {
    	echo "<h1>Record creation error for: </h1>" .
         "<p>"  . $sql . "</p>" .
         mysqli_error($conn);
	}	
} else {
	echo "Name and nast name must not be empty";
}

// attempt insert query execution

mysqli_close($conn);
echo  "</body></html>";
?>