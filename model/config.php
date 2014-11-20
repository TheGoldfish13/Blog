<?php
	require_once(__DIR__ . "/database.php");

	$path = "/Blog/"; /*stores the path to the project folder*/
	$host = "localhost";
	$username = "root";
	$password = "root";
	$database = "blog_db";

	$connection = new Database($host, $username, $password, $database); /*creates a new object $connection that replaces the need for repeating the old line of code that does the same thing */