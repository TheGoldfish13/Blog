<?php
require_once(__DIR__ . "/../model/config.php"); /*puts contents of config.php here (server info and $connection) */
?>

<h1>Register</h1>
<form method="post" action="<?php echo $path . "controller/create-user.php"  ?>"> <!-- when submitted page goes to create-user.php  -->
	<div>
		<label for="email">Email: </label>	<!-- creates a input box for the users email to be entered -->
		<input type="text" name="email" />
	</div>
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
