<?php

function getPercents($percent) {
	return round(($percent /100), 3);
}

function getParentheses($one, $two) {
	return (1 + ($one / $two));
}

function getExponent($first, $second, $third) {
	return ($third ** ($first * $second));
}

function getInvestment($money, $math) {
	return round(($money * $math), 2);
}

$principal = null;
$percent = null;
$years = null;
$period = null;
$message1 = null;
$message2 = null;
$message3 = null;
$message4 = null;
$message5 = null;
$message6 = null;
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
		if ( isset($_POST["period"])) {
			$period = $_POST["period"];
		}

		$percentrate = getPercents ($percent);
		//echo $percentrate;

		$parentheses = getParentheses($percentrate, $period);
		//echo $parentheses;

		$exponent = getExponent($period, $years, $parentheses);
		//echo $exponent;

		$total = getInvestment($principal, $exponent);
		//echo $total;

		$answer = "visible";
		$message1 = "You entered <span>$$principal</span> as the starting amount.";
		$message2 = "You entered <span>$percent%</span> as the percent rate.";
		$message3 = "You entered <span>$years</span> years for it to be invested.";
		$message4 = " The amount of times it will be compounded per year is <span>$period</span> times.";
		$message5 = "After <span>$years</span> years at <span>$percent%</span>, the investment will be compounded <span>$period</span> times per year. Bringing your investment total to <span>$$total</span>.";
		$message6 = "This is to show what you submitted, the text highlighted in orange is what you input.";

	}

?>

<header>
	<a class="calm-voice" href="?page=project&id=1">Back to form list</a>
</header>

<form method="POST">

	<h1 class="exciting-voice">Determining Compound Interest</h1>

	<p class="regular-voice">Let's calculate your investment.</p>

	<div class="field">
		<label class="talking-voice">What will be your principal amount?</label>
		<input id="principalTwo" class="regular-voice" type="number" name="principal" min="0" step="0.01" value="<?=$principal?>">
	</div>

	<div class="field">
		<label class="talking-voice">Enter the rate of interest</label>
		<input id="percentTwo" class="regular-voice" type="number" name="percent" min="0" step="0.1" value="<?=$percent?>">
	</div>

	<div class="field">
		<label class="talking-voice">The amount of years it will be invested</label>
		<input id="yearsTwo" class="regular-voice" type="number" name="years" min="0" value="<?=$years?>">
	</div>

	<div class="field">
		<label class="talking-voice">Number of times the interest is compounded per year</label>
		<input id="period" class="regular-voice" type="number" name="period" min="0" value="<?=$period?>">
	</div>

	<button class="regular-voice" type="submit" name="submitted">Invest</button>

</form>

<output>
	<p class="<?=$answer?> talking-voice"><?=$message6?></p>
	<p id="output" class="<?=$answer?> regular-voice"><?=$message1?></p>
	<p class="<?=$answer?> regular-voice"><?=$message2?></p>
	<p class="<?=$answer?> regular-voice"><?=$message3?></p>
	<p class="<?=$answer?> regular-voice"><?=$message4?></p>
	<p class="<?=$answer?> regular-voice"><?=$message5?></p>
</output>


