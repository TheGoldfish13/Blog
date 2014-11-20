<?php
	require_once(__DIR__ . "/../model/config.php"); //takes code from config and connects to server
 
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
?>