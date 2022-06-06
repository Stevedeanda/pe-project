
<style>	
	label, input, button {
		border: 1px solid red;
	}
	form {
		max-width: 300px;
		border: 1px solid green;
	}
	.field {
		border: 1px solid blue;
		display:  flex;
		flex-direction: column;
	}
	.field label {
		font-size: 14px;
		margin-bottom: 4px;
	}
	button[type="submit"], .field + .field {
		margin-top: 20px;
	}
	.feedback {
		color: green;
	}
</style>












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
	 	echo "<p class='feedback'>$total</p>";
 	}

?>




<form method="POST">

	<p>Calculating the berries!</p>

	<div class="field">
		<label>Number of guests</label>
		<input type="number" name="guests" min="0" value="<?=$guests?>">
	</div>

	<div class="field">
		<label>Berries per guest</label>
		<input type="number" name="berries" value="<?=$berries?>">
	</div>

	<button type="submit" name="submitted">Push me</button>

</form>
























