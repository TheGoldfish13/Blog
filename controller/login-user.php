<?php
	require_once(__DIR__ . "/../model/config.php"); /*puts code from config here*/

	$username = filter_input(INPUT_POST, "username", FILTER_SANITIZE_STRING); /*filters the input to make sure that the input for username is a string*/
	$password = filter_input(INPUT_POST, "password", FILTER_SANITIZE_STRING); /*filters the input to make sure that the input for password is a string*/

	$query = $_SESSION["connection"]->query("SELECT salt, password FROM users WHERE username = '$username'"); /*selecting a salt from the users table for the username*/

	if($query->num_rows == 1) {
		$row = $query->fetch_array();

		if($row["password"] === crypt($password, $row["salt"])) { /*if the inputted username and password are authenticated user then it echoes loggin succesfull*/
			$_SESSION["authenticated"] = true;
			echo "<p>Login Successfull </p>";
		}
		else {
			echo "<p> invalid username or password </p>"; /*if not then it echoes invalid username or password*/
		}
	}
	else {
		echo "<p> invalid username and password </p>";
	}