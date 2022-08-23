<?php

function getPer($percent) {
	return round(($percent /100), 3);
}

function getMath($one, $two) {
	return (1 + ($one * $two));
}

function getInvest($money, $math) {
	return round(($money * $math), 2);
}

$principal = 0;
$percent = 0;
$years = 0;
$message1 = null;
$message2 = null;
$message3 = null;
$message4 = null;

	if ( isset($_POST["submitted"])) {

		if ( isset($_POST["principal"])) {
			$principal = $_POST["principal"];
		}
		if ( isset($_POST["percent"])) {
			$percent = $_POST["percent"];
		}
		if ( isset($_POST["years"])) {
			$years = $_POST["years"];
		}

		$percentrate = getPer ($percent);
		//echo $percentrate;

		$math = getMath($percentrate, $years);
		//echo $math;

		$total = getInvest($principal, $math);

		$message1 = "Enter the principal: $" . $principal;
		$message2 = "Enter the rate of interest: $percent";
		$message3 = "Enter the number of years: $years";
		$message4 = "After $years years at " . $percent . "%, the investment will be worth $" . $total . ".";

	}

?>

<header>
	<a class="calm-voice" href="?page=project&id=1">Back to form list</a>
</header>

<form method="POST">

	<h1 class="exciting-voice">Computing Simple Interest</h1>

	<p class="regular-voice">Let's calculate your investment.</p>

	<div class="field">
		<label class="talking-voice">What will be your principal amount?</label>
		<input type="number" name="principal" min="0" step="0.01" value="<?=$principal?>">
	</div>

	<div class="field">
		<label class="talking-voice">Rate of Percentage?</label>
		<input type="number" name="percent" min="0" step="0.1" value="<?=$percent?>">
	</div>

	<div class="field">
		<label class="talking-voice">The amount of years it will be invested.</label>
		<input type="number" name="years" min="0" value="<?=$years?>">
	</div>

	<button type="submit" name="submitted">Push me</button>

	<p class="regular-voice"><?=$message1?></p>
	<p class="regular-voice"><?=$message2?></p>
	<p class="regular-voice"><?=$message3?></p>
	<p class="regular-voice"><?=$message4?></p>

</form>