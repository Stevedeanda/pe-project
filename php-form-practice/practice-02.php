<style>
	
	form {
		max-width: 300px;
		border: solid wheat;
	}

	.beer {
		display: flex;
		flex-direction: row;
	}

	button[type="submit"], .beer {
		margin-top: 20px;
	}

</style>

<?php

	$drink = 2022;

	if ( isset($_POST["submitted"])) {
		if (isset($_POST["born"])) {
			$born = $_POST["born"];
		}

		$age = $drink - floatval($born);

		$drinkup = "You are old enough to drink, go ride ahead.";
		$tooyoung = "You are {$age} years old, not 21, no alcohol for you kiddo.";

		if ($age >= 21) {
			echo $drinkup;
		} else {
			echo $tooyoung;
		}
	}

?>



<form method="POST">
	
	<p>Are you of drinking age?</p>

	<div class="beer">
	 	<label>What year were you born?</label>
	 	<input type="number" name="born" max="2022" min="1900" required="required">
	</div>

	<button type="submit" name="submitted">Let's find out</button>

</form>