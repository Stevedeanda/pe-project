<?php

	$message1 = null;
	$message2 = null;
	$answer = "hide";

	if (isset($_POST["submitted"])) {

		if ( isset($_POST["person"])) {
			$person = $_POST["person"];
		}
		if ( isset($_POST["email"])) {
			$email = $_POST["email"];
		}
		if ( isset($_POST["text"])) {
			$text = $_POST["text"];
		}

		$answer = "visible";
		$message1 = "An email was sent to <span>$email</span> please verify email by clicking on link. We will get to your inquiry of <span>'$text'</span> as soon as possible. Thank you for reaching out to us <span>$person</span> and have a great day!";
		$message2 = "This is to show what you submitted, the text highlighted in orange is what you input";
	}
?>

<header>
	<a class="calm-voice" href="?page=project&id=1">Back to form list</a>
</header>

<form id="ask-a-question" method="POST">

	<h1 class="exciting-voice">Multiple text inputs</h1>

	<p class="regular-voice">Fill out the three boxes below, the email has restrictions so make sure to follow the requirements.</p>

	<div class="field">
		<label class="talking-voice">Enter Full Name</label>
		<input class="regular-voice" name="person" type="text" size="20" required="required">
	</div>

	<div class="field">
		<label class="talking-voice">Enter email address</label>
		<input class="regular-voice" name="email" type="email" size="25" maxlength="40" required="required">
	</div>

	<div class="field">
		<label class="talking-voice">Talking points</label>
		<textarea class="regular-voice" name="text" cols="10" rows="5" maxlength="200" placeholder="What is your question?" required="required"></textarea>
	</div>

	<button class="regular-voice" name="submitted" type="submit">Submit</button>

</form>

<output>
	<p id="output-one" class="<?=$answer?> talking-voice"><?=$message2?></p>
	<p id="output-two" class="<?=$answer?> regular-voice"><?=$message1?></p>
</output>
































