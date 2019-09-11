<?php
echo ("<html><body>");
$servername = "localhost" ;
$username = "root";
$password = "";
$dbname = "databaseTest";
$conn = mysqli_connect($servername, $username, $password, $dbname);
if  (!$conn) {
   die("Connection failed: " . mysqli_connect_error() . "\n" );
}

$user_id = mysqli_real_escape_string($conn, $_POST['user_id']);
$first_name = mysqli_real_escape_string($conn, $_POST['first_name']);
$last_name = mysqli_real_escape_string($conn, $_POST['last_name']);

$sql = "UPDATE Users SET firstname = '$first_name', lastname = '$last_name' WHERE Users.user_id = $user_id";

  if (mysqli_query($conn, $sql)) {
      echo "$user_id Record updated.\n";
  } else {
     echo  "Record creation error for: " . $sql . "\n" . mysqli_error($conn);
  }
mysqli_close($conn);
echo  "</body></html>";
?>