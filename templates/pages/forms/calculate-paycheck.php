<?php

	$work = null;
	$rate = null;
	$message1 = null;
	$message2 = null;
	$paycheck = null;
	$answer = "hide";

	if (isset($_POST["submitted"])) {
		if (isset($_POST["work"])) {
			$work = $_POST["work"];
		}
		if (isset($_POST["rate"])) {
			$rate = $_POST["rate"];
		}

		$paycheck = floatval($work) * floatval($rate);

		$answer = "visible";
		$message1 = "You worked <span>$work</span> hours and got paid <span>\$$rate</span> an hour. Looks like you made <span>\${$paycheck}</span> for the week.";
		$message2 = "This is to show what you submitted, the text highlighted in orange is what you input as well as the answer.";
	}

	// $paycheck = floatval($work) * floatval($rate);

	// $answer = "visible";
	// $message1 = "You worked <span>$work</span> and got paid at <span>$rate</span> an hour. Looks like you made <span>\${$paycheck}</span> for the week.";
	// $message2 = "This is to show what you submitted, the text highlighted in orange is what you input and the answer as well.";


?>

<header>
	<a class="calm-voice" href="?page=project&id=1">Back to form list</a>
</header>

<form id="calculate-paycheck" method="POST">

	<h1 class="exciting-voice">Paycheck Calculator</h1>

	<p class="regular-voice">Let's figure out your paycheck for the week. Input the hours and pay rate below.</p>

	<div class="field">
		<label class="talking-voice">Hours worked</label>
		<input class="regular-voice" type="number" name="work" min=0 max=168 step=0.01 value="<?=$work?>">
	</div>
	<div class="field">
		<label class="talking-voice">Pay rate</label>
		<input class="regular-voice" type="number" name="rate" min="0" max="999" step=0.01 value="<?=$rate?>">
	</div>

	<button class="regular-voice" name="submitted" type="submit">Calculate</button>

</form>

<output>
	<p class="<?=$answer?> talking-voice"><?=$message2?></p>
	<p id="outcome" class="<?=$answer?> regular-voice"><?=$message1?></p>
</output>

