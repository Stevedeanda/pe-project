


<?php include("style.php"); ?>

<?php

	$guests = 0;
	$berries = 0;

	if ( isset($_POST["submitted"])) {
 	
	 	if ( isset($_POST["guests"])) {
	 		$guests = $_POST["guests"];
	 	}
	 	if ( isset($_POST["berries"])) {
	 		if ( $_POST["berries"] >= 0) {
	 			$berries = $_POST["berries"];
	 		}
	 	}

	 	$total = floatval($guests) * floatval($berries);
 	}

?>

<form method="POST">

	<h1>Form practice - Multiplying</h1>

	<p>Calculating the berries!</p>

	<div class="field">
		<label>Number of guests</label>
		<input type="text" name="guests" min="0" value="<?=$guests?>">
	</div>

	<div class="field">
		<label>Berries per guest</label>
		<input type="number" name="berries" value="<?=$berries?>">
	</div>

	<button type="submit" name="submitted">Push me</button>

	<p><?=$total?></p>

</form>
























