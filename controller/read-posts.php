<?php

	require_once(__DIR__ . "/../model/config.php"); /*puts code from config here*/

	$query = "SELECT * FROM posts"; /*retrieves the posts from database*/
	$result = $_SESSION["connection"]->query($query); 

	if($result) {
		while($row = mysqli_fetch_array($result)) {
			echo "<div class='post'>";
			echo "<h2>" . $row['title'] . "</h2>";
			echo "<br/>";
			echo "<p>" . $row['post'] . "<h1>";
			echo "<br/>";
			echo "</div>";
		}
	}