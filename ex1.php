<!DOCTYPE html>
<html>
<head>
       <title>PHP example</title>

       <?php
       	$viewer = getenv( "HTTP_USER_AGENT" );
		$browser = "An unidentified browser";
       		if(preg_match("/Mac/i", "$viewer"))
			{ 
				?>
		      		<link rel="stylesheet" type="text/css" href="mac.css"></style>
		      	<?php 
      		}
      		else if(preg_match( "/Windows/i", "$viewer" ))
      		{
		   		?>
		      		<link rel="stylesheet" type="text/css" href="windows.css"></style>
		      	<?php 
	    	}
	    ?>
</head>
<body>
<?php
//require_once "includefileTina.php";
//include "includefileTina.php";
?>
<h1>Hello world!</h1>
</body>
</html>