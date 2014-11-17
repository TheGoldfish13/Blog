<?php
	require_once(__DIR__ . "/../model/config.php"); //takes code from config and connects to server
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
/*test comment for source tree*/
	$query = $connection->query("CREATE TABLE posts (" /*creates a table called posts that needs....*/
		. "id int(11) NOT NULL AUTO_INCREMENT," /*needs a id that will be an integer, cant be empty*/
		. "title varchar (255) NOT NULL," /*needsa title up to 255 characters and cant be nothing*/
		. "post text NOT NULL,"  /*the actual text of the post, Cant be empty*/
		. "PRIMARY KEY (id) )"); /*the tables primary key is the id*/

if($query) {
		echo " Succesfully created table: posts"; //runs the query, creates the table once
	}
	else {
		echo "<p> $connection->error </p>"; //echos out that the table has already been created
	}

 	$connection->close();
?>