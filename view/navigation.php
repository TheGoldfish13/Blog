<?php
	require_once(__DIR__ . "/../model/config.php"); /*puts the code in config here (creates the variable $path )*/
?>

<nav id="testing"> 
<ul>
	<p>
		<li><a href="<?php echo $path . "post.php" ; ?>"><h1>Blog Post Form </h2></a></li> <!-- link that goes to post.php -->
		<!-- concatinates the path variable with post.php to have the equivalent of href="/Blog/post.php" -->
	</p>
</ul>
</nav>