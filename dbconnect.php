<?php
	// Connect to MySQL server
	$servername = "localhost";
	$username = "root";
	$password = "";

	$conn = mysqli_connect($servername, $username, $password);

	// Check connection
	if (!$conn) {
	    die("Connection failed: " . mysqli_connect_error());
	}

	// Create database
	$sql = "CREATE DATABASE registerdb";
	if (mysqli_query($conn, $sql)) {
	    echo "Database created successfully";
	} else {
	    echo "Error creating database: " . mysqli_error($conn);
	}

	// Connect to database
	$db = mysqli_connect('localhost', 'root', '', 'registerdb');

	// Create table
	$sql = "CREATE TABLE users (
				id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
				username VARCHAR(30) NOT NULL,
				password VARCHAR(30) NOT NULL,
				reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
			)";

	if (mysqli_query($db, $sql)) {
	    echo "Table created successfully";
	} else {
	    echo "Error creating table: " . mysqli_error($db);
	}

	mysqli_close($conn);
?>
