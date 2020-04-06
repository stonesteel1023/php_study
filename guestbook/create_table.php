<?php
	include("db_connect.php");

	$conn = db_connect();

	$query = "CREATE TABLE guestbook
					(
						id INT(10) UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
						name VARCHAR(20) NOT NULL,
						password VARCHAR(20) NOT NULL,
						content TEXT NOT NULL,
						writedate TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
					)";

	$conn->query($query);
?>