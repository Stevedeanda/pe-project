
<style>
	
	form {
		max-width: 400px;
		border: solid 3px green;
		padding: 20px;
	}

	.timesheet {
		display: flex;
		flex-direction: column;
		margin: 20px 0;
	}

	button[type="submit"] {
		color: green;
	}
	button[type="submit"]:hover {
		color: darkgreen;
		background-color: gray;
		padding: 3px solid green	
	}
</style>

<?php

	if (isset($_POST["submitted"])) {
		if (isset($_POST["work"])) {
			$work = $_POST["work"];
		}
		if (isset($_POST["rate"])) {
			$rate = $_POST["rate"];
		}

		$paycheck = floatval($work) * floatval($rate);

		$message = "Looks like you made \${$paycheck} for the week.";
	}



?>

<form method="POST">

	<p>Let's figure out my paycheck for the week</p>

	<div class="timesheet">
		<label>Hours worked</label>
		<input name="work" type="number" min="0" max="168">
	</div>
	<div class="timesheet">
		<label>Pay rate</label>
		<input name="rate" type="number" min="0" max="999">
	</div>

	<button name="submitted" type="submit">Money Please!!!</button>

	<p><?=$message?></p>

</form>