<!DOCTYPE html>
<html>
	<head>
		<title>second</title>
		<!-- <link rel="stylesheet" type="text/css" href="exercisestyle.css"> -->
			<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	</head>
	<body>
		<?php
			$servername = "localhost";
			$username   = "root";
			$password   = ""; 
			$dbname     = "cr10_hristins_dakic_carrental";
			// Create connection
			$conn = mysqli_connect($servername, $username, $password, $dbname);
			// Check connection 
			if (!$conn) {
			   die("Connection failed: " . mysqli_connect_error() . "\n");
			}
			// $sql = "SELECT first_name, last_name, birth_date, driving_licence FROM customer";
			$sql = "SELECT 
					cars.registration_num, cars.daily_rate, locations.location_name, adress.street_name, adress.house_number
					FROM cars
					JOIN locations ON locations.location_id = cars.fk_location_id 
					JOIN adress ON adress.adress_id = locations.fk_adress_id
					ORDER BY daily_rate";
			$result = mysqli_query($conn, $sql);
			// fetch the next row (as long as there are any) into $row 
			while($row = mysqli_fetch_assoc($result)) {
			    echo "<table class='table'>";
				    echo "<thead class='thead-dark'>
							<tr>
								<th>registration_num</th>
								<th>daily_rate</th>
								<th>location</th>
								<th>street_name</th>
								<th>house_number</th>
							</tr>
					</thead>";
					foreach ($result as $v1) { //loop for ROW
				    echo "<tr>";
					    foreach ($v1 as $v2) { //loop for CELL
					        echo "<td>$v2</td>";
					    }
				    echo "</tr>";
					}
				echo "</table>";
			}
			//echo  "Fetched data successfully\n";
			// Free result set
			mysqli_free_result($result);
			// Close connection
			mysqli_close($conn);
		?>
	</body>
</html>