<?php

	$guests = null;
	$berries = null;
	$total = null;
	$message1 = null;
	$message2 = null;
	$answer = "hide";

	if ( isset($_POST["submitted"])) {
 	
	 	if ( isset($_POST["guests"])) {
	 		$guests = $_POST["guests"];
	 	}
	 	if ( isset($_POST["berries"])) {
	 		if ( $_POST["berries"] >= 0) {
	 			$berries = $_POST["berries"];
	 		}
	 	}

	 	$total = floatval($guests) * floatval($berries);

	 	$answer = "visible";
		$message1 = "We will need <span>$berries</span> berries per guest. Since there is <span>$guests</span> guests, we will need a total of <span>$total</span> berries.";
		$message2 = "This is to show what you submitted, the text highlighted in orange is what you input as well as the answer.";
 	}

?>

<header>
	<a class="calm-voice" href="?page=project&id=1">Back to form list</a>
</header>


<form method="POST">

	<h1 class="exciting-voice">Calculating Berries</h1>

	<p class="regular-voice">Let's figure out how many berries we need. You can type the numbers in or use the arrows inside the input field.</p>

	<div class="field">
		<label class="talking-voice">Number of guests</label>
		<input class="regular-voice" type="number" name="guests" min="0" value="<?=$guests?>">
	</div>

	<div class="field">
		<label class="talking-voice">Berries per guest</label>
		<input class="regular-voice" type="number" name="berries" min="0" value="<?=$berries?>">
	</div>

	<button class="regular-voice" type="submit" name="submitted">Push me</button>

</form>

<footer>
	<p class="<?=$answer?> talking-voice"><?=$message2?></p>
	<p class="<?=$answer?> regular-voice"><?=$message1?></p>
</footer>




