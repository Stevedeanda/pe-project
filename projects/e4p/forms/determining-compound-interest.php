


<?php

function getPercent($percent) {
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

$principal = 0;
$percent = 0;
$years = 0;
$period = 0;
$message1 = null;

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

		$percentrate = getPercent ($percent);
		//echo $percentrate;

		$parentheses = getParentheses($percentrate, $period);
		//echo $parentheses;

		$exponent = getExponent($period, $years, $parentheses);
		//echo $exponent;

		$total = getInvestment($principal, $exponent);
		//echo $total;

		$message1 = "$" . $principal . " invested at " . $percent . "% for $years years compounded $period times per year is $" . $total . ".";

	}

?>

<header>
	<a href="index.php">Home</a>
</header>

<form method="POST">

	<h1 class="medium-voice">Determining Compound Interest</h1>

	<p>Let's calculate your investment.</p>

	<div class="field">
		<label>What will be your principal amount?</label>
		<input type="number" name="principal" min="0" step="0.01" value="<?=$principal?>">
	</div>

	<div class="field">
		<label>Enter the rate of interest</label>
		<input type="number" name="percent" min="0" step="0.1" value="<?=$percent?>">
	</div>

	<div class="field">
		<label>The amount of years it will be invested</label>
		<input type="number" name="years" min="0" value="<?=$years?>">
	</div>

	<div class="field">
		<label>The number of times the interest is compunded per year</label>
		<input type="number" name="period" min="0" value="<?=$period?>">
	</div>

	<button type="submit" name="submitted">Invest</button>

	<p><?=$message1?></p>

</form>











