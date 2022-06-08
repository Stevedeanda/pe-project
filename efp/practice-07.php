

<?php include("style.php"); ?>

<?php

	$string = "Hello";

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


<form method="POST">

	<h1>Form practice - Counting the Characters in a String</h1>
	
	<p>Let's count characters</p>

	<div class="field">
		<label>Write your string here</label>
		<input type="text" name="string" value="<?=$string?>">
	</div>

	<button type="submit" name="submitted">Push me</button>

	<p>"<?=$string?>" has <?=$message?> characters.</p>

</form>



























