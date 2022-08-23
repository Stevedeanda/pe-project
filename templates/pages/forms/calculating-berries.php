<?php

	$guests = 0;
	$berries = 0;
	$total = 0;

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

<header>
	<a class="calm-voice" href="?page=project&id=1">Back to form list</a>
</header>


<form method="POST">

	<h1 class="exciting-voice">Calculating Berries</h1>

	<p class="regular-voice">Let's figure out how many berries we need</p>

	<div class="field">
		<label class="talking-voice">Number of guests</label>
		<input type="number" name="guests" min="0" value="<?=$guests?>">
	</div>

	<div class="field">
		<label class="talking-voice">Berries per guest</label>
		<input type="number" name="berries" min="0" value="<?=$berries?>">
	</div>

	<button type="submit" name="submitted">Push me</button>

	<p class="regular-voice">We will need <span><?=$berries?></span> berries per guest. Since there is <span><?=$guests?></span> guests, we will need a total of <span><?=$total?></span> berries.</p>

</form>