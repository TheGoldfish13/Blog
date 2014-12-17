<?php
	require_once(__DIR__ . "/../model/config.php"); /*puts the code in config here (creates the variable $path )*/
?>
<div class="fluid-container">
	<div class="row">
		<nav> 
			<ul> <!-- excuse the code below that looks fucking stupid, it works -->
				<?php
					if(authenticateUser()) {
				?>
					<div class="col-xs-12">	
						<div class="col-xs-1"></div>
						<a href="<?php echo $path . "post.php" ; ?>"  class="bleh sticky col-xs-5" id="move"><h1>Blog Post Form </h1></a> <!-- link that goes to post.php -->
						<!-- concatinates the path variable with "post.php" to make the right path -->
						<a href="<?php echo $path . "controller/logout-user.php" ; ?>"  class="bleh sticky col-xs-5" id="move2"><h1>LOGOUT </h1></a>	
					</div>	
				<?php 	
					}
				?>

				<?php
					if(!authenticateUser()) {
				?>
					<div class="col-xs-1"></div>
					<a href="<?php echo $path . "register.php" ; ?>" class="sticky bleh col-xs-5"><h1>Register</h1></a>
					<a href="<?php echo $path . "login.php" ; ?>" class="sticky bleh col-xs-5"><h1>LOGIN</h1></a>
				<?php 	
					}
				?>

			</ul>
		</nav>
	</div>	
</div>	
