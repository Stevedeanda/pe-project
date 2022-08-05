

<?php 

//length in feet
$length = 0;
//width in feet
$width = 0; 
// 1 gallon covers 350 square feet
$rate = 350;
//paint needed in gallons
$gallons = 0;



function measurements($length,$width) {
	return ($length * $width);
}

if ( isset($_POST["submitted"])) {

	if ( isset($_POST["length"])) {
		$length = $_POST["length"];
	}
	if ( isset($_POST["width"])) {
		$width = $_POST["width"];
	}
}

$sf = measurements($length, $width);
$paint = ($sf/$rate);
$gallons = ceil($paint);

?>

<header>
	<a href="?page=forms">Back to form list</a>
</header>

<form method="POST">

	<h1 class="medium-voice">Paint Calculator</h1>

	<p>How many gallons of paint do I need?</p>

	<div class="field">
		<label>Length</label>
		<input type="number" name="length" min="0" value="<?=$length?>">
	</div>

	<div class="field">
		<label>Width</label>
		<input type="number" name="width" min="0" value="<?=$width?>">
	</div>

	<button type="submit" name="submitted">Calculate</button>

	<p>You will need to purchase <?=$gallons?> gallons of paint to cover <?=$sf?> square feet.</p>

</form>




