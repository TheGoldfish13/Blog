<?php
	require_once(__DIR__ . "/../model/config.php"); /*puts the code in config here (creates the variable $path )*/
?>

<nav> 
<ul>
	<li><a href="<?php echo $path . "post.php"  ?>">Blog Post Form</a></li> <!-- link that goes to post.php -->
	<!-- concatinates the path variable with post.php to have the equivalent of href="/Blog/post.php" -->
</ul>
</nav>