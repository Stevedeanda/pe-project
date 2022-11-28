<?php

	$message1 = null;

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

		$message1 = "An email was sent from $email. We will get to your inquiry of '$text' as soons as possible. Thank you for reaching out to us $person and have a great day!";
	}
?>

<!-- <header>
	<a class="calm-voice" href="?page=project&id=1">Back to form list</a>
</header> -->

<form method="POST">

	<h1 class="exciting-voice">Multiple text inputs</h1>

	<p class="regular-voice">Ask a question</p>

	<div class="field">
		<label class="talking-voice">Enter Full Name</label>
		<input name="person" type="text" size="20" maxlength="30" required="required">
	</div>

	<div class="field">
		<label class="talking-voice">Enter email address</label>
		<input name="email" type="email" size="30" required="required">
	</div>

	<div class="field">
		<label class="talking-voice">Talking points</label>
		<textarea name="text" cols="10" rows="5" maxlenght="45" placeholder="What is your question?" required="required"></textarea>
	</div>

	<button name="submitted" type="submit">Submit</button>

	<p class="regular-voice"><?=$message1?></p>

</form>