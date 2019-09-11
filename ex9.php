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
// $car_reg_no = mysqli_real_escape_string($conn, $_POST['car_registration_no']);
// $model = mysqli_real_escape_string($conn, $_POST[ 'model']);
// $brand = mysqli_real_escape_string($conn, $_POST['brand']);
// $image = mysqli_real_escape_string($conn, $_POST['image']);
$sql = "SELECT user_id, firstname, lastname, email, reg_date FROM Users WHERE user_id = 1";
$result = mysqli_query($conn, $sql);
// $i = 1;
while($row = mysqli_fetch_assoc($result)) {
	echo $save_userid = $row[ "user_id"];
	echo $save_firstname = $row["firstname"];
	echo $save_lastname = $row["lastname"];
}
echo  "<br>Fetched data successfully\n";
// Free result set
mysqli_free_result($result);
mysqli_close($conn);
echo  "</body></html>";
?>

<form action="ex9_1.php" method ="post">
   <p>
	   <label for="user_id">User ID:</label>
	   <input type="text" name= "user_id" id="userId" value="<?= $save_userid ?>">
   </p>
   <p>
	   <label for ="first_name">First Name:</label>
	   <input type="text" name="first_name"  id="firstName" value="<?= $save_firstname ?>">
   </p>
   <p>
	   <label for= "last_name">Last Name:</label>
	   <input type="text" name= "last_name" id="lastName" value="<?= $save_lastname ?>">
   </p>
   <input type= "submit" value="Update">
</form>