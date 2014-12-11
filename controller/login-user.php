<?php
	require_once(__DIR__ . "/../model/config.php"); /*puts code from config here*/

	$username = filter_input(INPUT_POST, "username", FILTER_SANITIZE_STRING); /*filters the input to make sure that the input for username is a string*/
	$password = filter_input(INPUT_POST, "password", FILTER_SANITIZE_STRING); /*filters the input to make sure that the input for password is a string*/

	$query = $_SESSION["connection"]->query("SELECT salt, password FORM users = WHERE '$username'");