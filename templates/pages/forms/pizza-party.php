<?php

//number of people
$people = null;
//number of pizza
$pizza = null;
// number of slices per pizza, 8 slices per pizza
$slices = 0;
// left over pizza slices
$leftOver = 0;
// number of slices per person
$total = 0;
$message1 = null;
$message2 = null;
$answer = "hide";

function slicesPizza($pizza) {
	return $pizza * 8;
}

if ( isset($_POST["submitted"])) {

	if ( isset($_POST["people"])) {
		$people = $_POST["people"];
	}

	if ( isset($_POST["pizza"])) {
		$pizza = $_POST["pizza"];
		$slices = slicesPizza($pizza);
		$total = intdiv($slices, $people);
		$leftOver = fmod($slices, $people);

		$answer = "visible";
		$message1 = "Number of guests? <span>$people</span>. Number of pizzas ordered? <span>$pizza</span>. Each pizza comes with 8 slices, we will have <span>$slices</span> slices in total. Each person gets <span>$total</span> slices of pizza. There will be <span>$leftOver</span> slices of pizza leftover.";
		$message2 = "This is to show what you submitted, the text highlighted in orange is what you input as well as the answer.";
	}
}

?>

<header>
	<a class="calm-voice" href="?page=project&id=1">Back to form list</a>
</header>

<form method="POST">

	<h1 class="exciting-voice">Pizza Party</h1>

	<p class="regular-voice">Let's see how many slices of pizza everyone will get. Go ahead and enter a number or use the arrows inside the input field. </p>

	<div class="field">
		<label class="talking-voice">Number of guests</label>
		<input class="regular-voice" type="number" name="people" min="0" value="<?=$people?>">
	</div>

	<div class="field">
		<label class="talking-voice">Number of pizzas</label>
		<input class="regular-voice" type="number" name="pizza" min="0" value="<?=$pizza?>">
	</div>

	<button class="regular-voice" type="submit" name="submitted">Pizza time</button>


</form>


<output>
	<p class="<?=$answer?> talking-voice"><?=$message2?></p>
	<p id="output" class="<?=$answer?> regular-voice"><?=$message1?></p>
</output>


