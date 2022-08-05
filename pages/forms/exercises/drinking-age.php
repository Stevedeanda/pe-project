


<?php
	// Initialize default variables
	$currentYear = 2022;
	$yearBorn = 2008;
	$message = null;
	$age = $currentYear - $yearBorn;
	

	// Deal with user input
	if ( isset($_POST["submitted"])) {
		if (isset($_POST["born"])) {
			$yearBorn = $_POST["born"];
			$age = $currentYear - floatval($yearBorn);	
		}
	} 

	// Do any calculations 
	if ($age >= 21) {
		$message = "You <span>$age</span> years old, you can drink buddy!"; 
	} else {
		$message = "You are <span>$age</span> years old, not 21, no alcohol for you kiddo.";
	}
?>
	
<header>
	<a href="?page=forms">Back to form list</a>
</header>

<form method="POST">

	<h1 class="medium-voice">Drinking calculator</h1>
	
	<p>Are you of drinking age?</p>

	<div class="field">
	 	<label>What year were you born?</label>
	 	<input type="number" name="born" max="2022" min="1900" required="required" value="<?=$yearBorn?>">
	</div>

	<button type="submit" name="submitted">Let's find out</button>

	<!-- Output -->

	<p><?=$message?></p>

</form>










