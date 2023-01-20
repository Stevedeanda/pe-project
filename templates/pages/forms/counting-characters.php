<?php

	$string = null;
	$message = null;
	$message1 = null;
	$message2 = null;
	$answer = "hide";

	// How do I make it that if they don't enter characters a message shows up saying they need to enter characters?

	if ( isset($_POST["submitted"])) {
		if ( isset($_POST["string"])) {
			$string = $_POST["string"];
		} 

		$message = strlen($string);

		$answer = "visible";
		$message1 = "You entered <span>$string</span> and it has <span>$message</span> characters.";
		$message2 = "This is to show what you submitted, the text highlighted in orange is what you input as well as the answer.";
	}

	
?>

<header>
	<a class="calm-voice" href="?page=project&id=1">Back to form list</a>
</header>

<form method="POST">

	<h1 class="exciting-voice">Character Counting</h1>
	
	<p class="regular-voice">Input a word and it will count the characters in the string.</p>

	<div class="field">
		<label class="talking-voice">Write your string here</label>
		<input class="regular-voice" type="text" name="string" value="<?=$string?>" required="required">
	</div>

	<button class="regular-voice" type="submit" name="submitted">Push me</button>

</form>

<output>
	<p class="<?=$answer?> talking-voice"><?=$message2?></p>
	<p id="outcome" class="<?=$answer?> regular-voice"><?=$message1?></p>
</output>




