

<?php include("style.php"); ?>

<?php
	// Initialize default variables
	$currentYear = 2022;
	$yearBorn = 2008;
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
		$message = "You $age years old, you can drink buddy!"; 
	} else {
		$message = "You are {$age} years old, not 21, no alcohol for you kiddo.";
	}
?>
	


<form method="POST">

	<h1>Form practice - Drinking calculator</h1>
	
	<p>Are you of drinking ages?</p>

	<div class="field">
	 	<label>What year were you born?</label>
	 	<input type="number" name="born" max="2022" min="1900" required="required" value="<?=$yearBorn?>">
	</div>

	<button type="submit" name="submitted">Let's find out</button>

	<!-- Output -->

	<p><?=$message?></p>

</form>










