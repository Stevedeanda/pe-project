
<style>
	
form {
	max-width: 400px;
	border: solid gray;
}

.title {
	margin-top: 60px;
	margin-bottom: 20px;
	margin-left: 20px;
	margin-right: 20px;
}

button[type="submit"] {
	margin-top: 20px;
	margin-bottom: 60px;
	margin-left: 20px;
	margin-right: 20px;

}

.meeting {
	/*border: solid blue;*/
	display: flex;
	flex-direction: column;
	padding: 20px;
}

</style>









<?php

	
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

		$message = "An email was sent to $email. We will get to your inquiry of $text as soon as possible. Thank you for reaching out to us $person and have a great day!";

	}


?>



<form method="POST">

	<p class="title">Ask a question</p>

	<div class="meeting">
		<label>Enter Full Name</label>
		<input name="person" type="text" size="20" maxlength="30" required="required">
	</div>

	<div class="meeting">
		<label>Enter email address</label>
		<input name="email" type="email" size="30" required="required">
	</div>

	<div class="meeting">
		<label>Talking points</label>
		<textarea name="text" cols="45" rows="8" maxlenght="45" placeholder="What is your question?" required="required"></textarea>
	</div>

	<button name="submitted" type="submit">Submit</button>

	<p><?=$message?></p>

</form>


























