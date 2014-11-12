<!-- this file is a controller that recieves the input from the post -->
<?php
	require_once(__DIR__ . "/../model/database.php"); /*puts contents of database.php here (server info) */

	$connection = new mysqli($host, $username, $password, $database); /*creates a connection to the database*/

	$title = filter_input(INPUT_POST, "title", FILTER_SANITIZE_STRING); /*this filters the post from "title" and filter it by making sure its a string*/
	$post = filter_input(INPUT_POST, "post", FILTER_SANITIZE_STRING); /*does the same thing except its filters 	"post"*/

	echo "<p>Title: $title </p>"; /*echoes title*/
	echo "<p>Post: $post </p>"; /*echoes post*/

	$connection->close(); /*closes connection*/