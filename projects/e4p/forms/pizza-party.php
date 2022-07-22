


<?php

//number of people
$people = 0;
//number of pizza
$pizza = 0;
// number of slices per pizza, 8 slices per pizza
$slices = 0;
// left over pizza slices
$leftOver = 0;
// number of slices per person
$total = 0;

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
	}
}

?>

<header>
	<a href="index.php">Home</a>
</header>

<form method="POST">

	<h1 class="medium-voice">Pizza Party</h1>

	<p>Let's see how many slices of pizza everyone will get</p>

	<div class="field">
		<label>Number of guests</label>
		<input type="number" name="people" min="0" value="<?=$people?>">
	</div>

	<div class="field">
		<label>Number of pizzas</label>
		<input type="number" name="pizza" min="0" value="<?=$pizza?>">
	</div>

	<button type="submit" name="submitted">Pizza time</button>

	<p>How many people? <?=$people?></p>
	<p>How many pizzas do you have? <?=$pizza?></p>
	<p>Each pizza comes with 8 slices, we will have <?=$slices?> slices in total.</p>
	<p><?=$people?> people with <?=$pizza?> pizzas.</p>
	<p>Each person gets <?=$total?> slices of pizza.</p>
	<p>There are <?=$leftOver?> leftover pizza slices</p>

</form>
















