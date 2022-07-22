


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
	<a href="?page=home">Home</a>
</header>


<form method="POST">

	<h1 class="medium-voice">Calculating Berries</h1>

	<p>Let's figure out how many berries we need</p>

	<div class="field">
		<label>Number of guests</label>
		<input type="number" name="guests" min="0" value="<?=$guests?>">
	</div>

	<div class="field">
		<label>Berries per guest</label>
		<input type="number" name="berries" min="0" value="<?=$berries?>">
	</div>

	<button type="submit" name="submitted">Push me</button>

	<p>We will need <span><?=$berries?></span> berries per guest. Since there is <span><?=$guests?></span> guests, we will need a total of <span><?=$total?></span> berries.</p>

</form>
























