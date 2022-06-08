

<?php include("style.php"); ?>

<?php

// SETUP ALL VARIABLES

	$first = "Joe";
	$last = "Glenn";

	function message($a, $b) {
		return "Hi my name is $a $b";
	}

// CHECK IF SOMEONE SUBMITTED THE FORM

// grab the information from the form

// DO ANYTHING SPECIAL

?>

<form method="POST">

	<h1>Form Practice - Full Name</h1>

	<div class="field">
		<label>First name</label>
		<input type="text" name="first" value="<?=$first?>">
	</div>

	<div class="field">
		<label>Last name</label>
		<input type="text" name="last" value="<?=$last?>">
	</div>

	<button type="submit" name="submitted">Submit</button>

	<?php echo message($first, $last) ?>

</form>

