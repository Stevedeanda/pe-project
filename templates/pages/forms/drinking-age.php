<?php
	// Initialize default variables
	$currentYear = 2022;
	$yearBorn = null;
	$message = null;
	$age = $currentYear - $yearBorn;
	$message2 = null;
	$answer = "hide";
	

	// Deal with user input
	if ( isset($_POST["submitted"])) {
		if (isset($_POST["born"])) {
			$yearBorn = $_POST["born"];
			$age = $currentYear - floatval($yearBorn);	
		}

			// Do any calculations 
		if ($age >= 21) {
			$answer = "visible";
			$message = "You were born in <span>$yearBorn</span>. You are <span>$age</span> years old, you can drink buddy!";
			$message2 = "This is to show what you submitted, the text highlighted in orange is what you input as well as the answer.";
		} else {
			$answer = "visible";
			$message = "You were born in <span>$yearBorn</span>. You are <span>$age</span> years old, not 21, no alcohol for you kiddo.";
			$message2 = "This is to show what you submitted, the text highlighted in orange is what you input as well as the answer.";
		}
	} 

?>
	
<header>
	<a class="calm-voice" href="?page=project&id=1">Back to form list</a>
</header>

<form id="drinking" method="POST">

	<h1 class="exciting-voice">Drinking calculator</h1>
	
	<p class="regular-voice">Are you of drinking age? You can type the year in or use the arrows inside the input field. </p>

	<div class="field">
	 	<label class="talking-voice">What year were you born?</label>
	 	<input class="regular-voice" type="number" name="born" max="2022" min="1900" required="required" value="<?=$yearBorn?>">
	</div>

	<button class="regular-voice" type="submit" name="submitted">Let's find out</button>

</form>

<!-- Output -->

<output>
	<p class="<?=$answer?> talking-voice"><?=$message2?></p>
	<p id="outcome" class="<?=$answer?> regular-voice"><?=$message?></p>
</output>




