<?php
	require_once(__DIR__ . "/../model/config.php"); /*puts code from config here*/
?>
<h1>Login</h1>

<form method="post" action="<?php echo $path . "controller/login-user.php" ?>">
	<div>
		<label for="username">Username: </label>	<!-- input box for username -->
		<input type="text" name="username" />
	</div>
	<div>
		<label for="password">Password: </label>	<!-- input box for password -->
		<input type="password" name="password" />
	</div>

	<div>
		<button type="submit">Submit</button> <!-- submit button -->
	</div>
</form>	