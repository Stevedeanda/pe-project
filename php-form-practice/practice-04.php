<style>
	
	form {
		max-width: 300px;
		display: grid;
		gap: 20px;
	}

	.field {
		display: grid;
	}

	
</style>



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

	<div class="field">
		<label>First name</label>
		<input type="text" name="first">
	</div>

	<div class="field">
		<label>Last name</label>
		<input type="text" name="last">
	</div>

	<button type="submit" name="submitted">Submit</button>

	<?php echo message($first, $last) ?>

</form>

