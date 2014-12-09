<?php
	require_once(__DIR__ . "/../model/config.php"); /*puts contents of config.php here (server info and $connection) */
	$email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_EMAIL); /*filters the input to make sure that the input for email is an email*/
	$username = filter_input(INPUT_POST, "username", FILTER_SANITIZE_STRING); /*filters the input to make sure that the input for username is a string*/
	$password = filter_input(INPUT_POST, "password", FILTER_SANITIZE_STRING); /*filters the input to make sure that the input for password is a string*/

	$salt = "$5$" . "rounds=5000$" . uniqid(mt_rand(), true) . "$"; /*creats salt variable*/

	$hashedPassword = crypt($password, $salt); /*makes the hashed password*/

	$query = $_SESSION["connection"]->query("INSERT INTO users SET " /*creates a query that inserts the variables into the users table */
		. "email = '$email',"
		. "username = '$username',"
		. "password = '$hashedPassword',"
		. "salt = '$salt'");

	if($query) {
		echo "successfully created user: $username"; /*checking if query was succefully created*/
	}
	else{
		echo "<p>" . $_SESSION["connection"]->error . "</p>"; /*if not then display why not*/
	}
?>