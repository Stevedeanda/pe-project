

<?php include("style.php"); ?>

<?php

$guests = 0;
$berries = 0;

if ( isset($_POST["submitted"]) ) {
	
	if ( isset($_POST["guests"]) ) {
		if ( $_POST["guests"] >= 0) {
			$guests = $_POST["guests"];
		}
	}

	if ( isset($_POST["berries"]) ) {
		if ( $_POST["berries"] >= 0) {
			$berries = $_POST["berries"];
		}
	}

	$total = floatval($guests)*floatval($berries);

	echo "<p class='feedback'>$total</p>";
}

?>

<form method="POST">

	<h1>Form practice - Multiplying</h1>

	<p>Calculating the berries!</p>

	<div class="field">
		<label>Number of guests</label>
		<input type="number" name="guests" value="<?=$guests?>">
	</div>

	<div class="field">
		<label>Berries per guest</label>
		<input type="number" name="berries" value="<?=$berries?>">
	</div>	

	<button type="submit" name="submitted">
	Push me
	</button>

</form>