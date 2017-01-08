<?php
	
	try {
		// create a PDO object so we can work with our database connection
		$pdo = new PDO('mysql:host=localhost; dbname=destress', 'destressuser', 'NcmM68hV2HvdVw2d');

		// set PDO attribute that controls the error mode to 
		// the mode that throws exceptions
		$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$pdo->exec('SET NAMES "utf8"');
	} catch (PDOException $e) {
		$output = 'Unable to connect to the database server.';
		include 'output.html.php';
		exit();
	}

	/*
	$output = 'Database connection established.';
	include 'output.html.php';
	*/
?>