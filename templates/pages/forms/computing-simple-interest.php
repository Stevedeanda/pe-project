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

$principal = null;
$percent = null;
$years = null;
$message1 = null;
$message2 = null;
$message3 = null;
$message4 = null;
$message5 = null;
$answer = "hide";

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

		$answer = "visible";
		$message1 = "You entered <span>$$principal</span> as the starting amount.";
		$message2 = "You entered <span>$percent%</span> as the percent rate.";
		$message3 = "You entered <span>$years</span> years for it to be invested.";
		$message4 = "After <span>$years</span> years at <span>$percent%</span>, the investment will be worth <span>$$total</span>.";
		$message5 = "This is to show what you submitted, the text highlighted in orange is what you input.";

	}

?>

<header>
	<a class="calm-voice" href="?page=project&id=1">Back to form list</a>
</header>

<form method="POST">

	<h1 class="exciting-voice">Computing Simple Interest</h1>

	<p class="regular-voice">All you do is enter the amount of money you are starting with in the first field. The second field takes the rate of percentage. Third field you input the number of years it will be invested. Let's calculate your investment. </p>

	<div class="field">
		<label class="talking-voice">What will be your principal amount?</label>
		<input id="principal" class="regular-voice" type="number" name="principal" min="0" step="0.01" value="<?=$principal?>">
	</div>

	<div class="field">
		<label class="talking-voice">Rate of Percentage?</label>
		<input id="percent" class="regular-voice" type="number" name="percent" min="0" step="0.1" value="<?=$percent?>">
	</div>

	<div class="field">
		<label class="talking-voice">The amount of years it will be invested.</label>
		<input id="years" class="regular-voice" type="number" name="years" min="0" value="<?=$years?>">
	</div>

	<button class="regular-voice" type="submit" name="submitted">Push me</button>

</form>

<output>
	<p class="<?=$answer?> talking-voice"><?=$message5?></p>
	<p id="outcome" class="<?=$answer?> regular-voice"><?=$message1?></p>
	<p class="<?=$answer?> regular-voice"><?=$message2?></p>
	<p class="<?=$answer?> regular-voice"><?=$message3?></p>
	<p class="<?=$answer?> regular-voice"><?=$message4?></p>
</output>






