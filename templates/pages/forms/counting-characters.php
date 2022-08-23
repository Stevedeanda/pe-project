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
	<a class="calm-voice" href="?page=project&id=1">Back to form list</a>
</header>

<form method="POST">

	<h1 class="exciting-voice">Character Counting</h1>
	
	<p class="regular-voice">Let's count the characters in string</p>

	<div class="field">
		<label class="talking-voice">Write your string here</label>
		<input type="text" name="string" value="<?=$string?>">
	</div>

	<button type="submit" name="submitted">Push me</button>

	<p class="regular-voice">"<?=$string?>" has <span><?=$message?></span> characters.</p>

</form>