<?php
	require_once(__DIR__ . "/database.php");
	session_start();

	$path = "/Blog/"; /*stores the path to the project folder*/
	$host = "localhost";
	$username = "root";
	$password = "root";
	$database = "blog_db";

	if(!isset($_SESSION["connection"])) { /*if the variable does not contain information than it will create the database object and set it to the session variable*/
		$connection = new Database($host, $username, $password, $database); /*creates a new object $connection that replaces the need for repeating the old line of code that does the same thing */
		$_SESSION["connection"] = $connection;
	}