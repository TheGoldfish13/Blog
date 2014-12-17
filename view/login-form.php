<?php
	require_once(__DIR__ . "/../model/config.php"); /*puts code from config here*/
?>
<h1 id="kiwi">Login</h1>

<form method="post" action="<?php echo $path . "controller/login-user.php" ?>">
	<div class="row">
			<div id="username-box" class="col-xs-12">
				<label for="username">Username: </label> <!-- input box for username -->
				<input type="text" name="username" />
			</div>
	</div>
	<div class="row">	
			<div id="password-box" class="col-xs-12">
				<label for="password">Password: </label> <!-- input box for password -->
				<input type="password" name="password" />
			</div>
		</div>

	<div class="row">
			<div class="col-xs-12">
				<button type="submit" class="btn btn-primary button" data-toggle="button" aria-pressed="false" autocomplete="off"> Submit </button> <!-- submit button -->
			</div>
		</div>
</form>	