<?php
	require_once(__DIR__ . "/../model/database.php"); //takes code from database and connects to server

 	$connection = new mysqli($host, $username, $password); //the variable used to connect to server

 	if($connection->connect_error) { //if it doesnt connect kill the program, and echo the error
 		die("Error: " . $connection->connection_error);
 	} 
 	$exists = $connection->select_db($database); // It trys to connect to the MYSQL server

 	if(!$exists) { // if the database doesnt exist it makes one
 		$query = $connection->query("CREATE DATABASE $database");

 		if($query) { 
 			echo "Succesfully created database: " . $database;
 		}
 	}
 	else { // if it exists it echoes that it has already been created
 			echo "Database has already been created";
 		}

 	$connection->close();

?>
