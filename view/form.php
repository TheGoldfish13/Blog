<?php 
	require_once(__DIR__ . "/../model/config.php");
?>


<h1>Create Blog Post</h1>

<form method="post" action="<?php echo $path . "controller/create-post.php"  ?>"> <!-- telling it to send info to create.php -->
	<div>
		<label for="title"> Title: </label>
		<input type="text" name="title" /> <!--creates a input box (one line) with Title: beside it and the name title-->
	</div>

	<div>
		<label for="post">Post: </label> <!-- creates a text area (multiple lines) called post, with Post: beside it-->
		<textarea name="post"></textarea>
	</div>

	<div>
		<button type="submit">Submit</button> <!-- submit button -->
	</div>

</form>