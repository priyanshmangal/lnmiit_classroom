<?php
	session_start();
	echo("removing all session and logout");
	session_unset(); 
	session_destroy();
	header("Location: index.php");

?>