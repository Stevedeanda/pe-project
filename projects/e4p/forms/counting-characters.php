


<?php

	$string = "Hello";
	$message = null;

	// How do I make it that if they don't enter characters a message shows up saying they need to enter characters?

	if ( isset($_POST["submitted"])) {
		if ( isset($_POST["string"])) {
			$string = $_POST["string"];
		} else {
			echo "Must enter a string";
		}
	}

	$message = strlen($string);
?>

<header>
	<a href="index.php">Home</a>
</header>

<form method="POST">

	<h1 class="medium-voice">Character Counting</h1>
	
	<p>Let's count the characters in string</p>

	<div class="field">
		<label>Write your string here</label>
		<input type="text" name="string" value="<?=$string?>">
	</div>

	<button type="submit" name="submitted">Push me</button>

	<p>"<?=$string?>" has <span><?=$message?></span> characters.</p>

</form>



























