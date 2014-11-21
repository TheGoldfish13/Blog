<!-- this file is a controller that recieves the input from the post -->
<?php
	require_once(__DIR__ . "/../model/config.php"); /*puts contents of config.php here (server info and $connection) */

	$title = filter_input(INPUT_POST, "title", FILTER_SANITIZE_STRING); /*this filters the post from "title" and filter it by making sure its a string*/
	$post = filter_input(INPUT_POST, "post", FILTER_SANITIZE_STRING); /*does the same thing except its filters 	"post"*/

	$query = $_SESSION["connection"]->query("INSERT INTO posts SET title = '$title', post = '$post' "); /*query to insert values called post and title into table to be stored in the database*/

	if($query) { /*if query exists then echoes this*/
		echo "<p> succesfully inserted post: $title </p>";
	}
	else { /*if not then it echoes the connection error*/
		echo "<p>" . $_SESSION["connection"]->error . "</p>"; /*the session variable replaces the connection variable*/
	}
