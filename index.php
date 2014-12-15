<head>
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>
<?php 
	require_once(__DIR__ . "/controller/login-verify.php"); /*puts code from login-verify here*/
	require_once(__DIR__ . "/view/header.php"); /*puts a header*/
	if(authenticateUser()) {
		require_once(__DIR__ . "/view/navigation.php"); /*inserts the code in navigation.php only if the user is logged in*/
	}
	require_once(__DIR__ . "/controller/create-db.php"); // puts everything in create-db here
	require_once(__DIR__ . "/controller/read-posts.php"); /*puts code from read-posts here */
	require_once(__DIR__ . "/view/footer.php"); /*puts a footer*/
?>
