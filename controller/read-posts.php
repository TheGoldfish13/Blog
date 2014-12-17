<?php

	require_once(__DIR__ . "/../model/config.php"); /*puts code from config here*/

	$query = "SELECT * FROM posts ORDER BY id DESC"; /*retrieves the posts from database*/
	$result = $_SESSION["connection"]->query($query);

	if($result) { /*if result is true then all the titles are echoed in h2 and the posts are echoed normally. the posts also have spaces in between them*/
		while($row = mysqli_fetch_array($result)) {
			echo "<div class='post'>"; 
			echo "<h2>" . $row['title'] . "</h2>";
			echo "<p> Posted on: " .  $row["DateTime"] . "</p>";
			echo "<br/>";
			echo "<p>" . $row['post'] . "<h1>";
			echo "<br/>";
			echo "</div>";
		}
	}