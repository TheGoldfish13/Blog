<?php
	require_once(__DIR__ . "/../model/config.php"); /*puts the code in config here (creates the variable $path )*/
?>

<nav> 
<ul>
	<p>
		<a href="<?php echo $path . "post.php" ; ?>"><h1 id="bleh">Blog Post Form </h2></a> <!-- link that goes to post.php -->
		<!-- concatinates the path variable with post.php to have the equivalent of href="/Blog/post.php" -->
	</p>
</ul>
</nav>