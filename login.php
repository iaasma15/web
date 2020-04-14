<?php
/*
	header('Content-Type: text/xml');
	echo '<?xml version = "1.0" encoding = "UTF-8" standalone = "yes" ?>'

	echo '<response>'*/

		session_start();
		if (isset($_GET["L_UN"]) && isset($_GET["L_Pwd"])) {
			# code...
			$_SESSION["L_UN"] = $_GET["L_UN"];
			$_SESSION["L_Pwd"] = $_GET["L_Pwd"];

			echo "Session started successfully";
			header("Location: home.php");
		}
		else{
			echo "Session Cant start";
		}

/*
	echo '</response>'*/
		


?>