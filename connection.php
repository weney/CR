<?php 

	// initialize database connection with credentials 
	$dbconn = new mysqli("localhost", "root", "", "elective3");
	if ($dbconn->connect_error) {
	    die("Connection failed: " . $dbconn->connect_error);
	    exit();
	}

?>