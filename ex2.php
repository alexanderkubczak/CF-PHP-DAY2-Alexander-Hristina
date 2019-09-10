<!DOCTYPE html>
<html>
<head>
	<title>Exercise 2</title>
</head>
<body>

	<form action="ex2.php" method ="POST">
Name: <input type="text"  name="name" />
Surname: <input type ="text" name="surname" />
<input  type="submit" name="submit"  />
</form>

<?php
if( isset($_POST['submit']))
{
	if( $_POST["name" ] && $_POST["surname"] )
	{
	echo "Welcome ". $_POST[ 'name']. " ".$_POST[ 'surname']. "<br />";
	}
	elseif( $_POST["name"])
	{
		echo "Please insert your surname";
	}
	elseif( $_POST["surname"])
	{
		echo "Please insert your name";
	}
	 else 
	{
		echo "Please insert your Name and Surname";
	}	

}
?>
</body>
</html>