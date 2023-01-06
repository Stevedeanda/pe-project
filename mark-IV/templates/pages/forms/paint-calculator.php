<?php 

//length in feet
$length = null;
//width in feet
$width = null; 
// 1 gallon covers 350 square feet
$rate = 350;
//paint needed in gallons
$gallons = 0;
$message1 = null;
$message2 = null;
$answer = "hide";



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

	$sf = measurements($length, $width);
	$paint = ($sf/$rate);
	$gallons = ceil($paint);

	$answer = "visible";
	$message1 = "You will need to purchase <span>$gallons</span> gallons of paint to cover <span>$sf</span> square feet";
	$message2 = "This is to show what you submitted, the text highlighted in orange is what you input";	
}

// $sf = measurements($length, $width);
// $paint = ($sf/$rate);
// $gallons = ceil($paint);

?>

<header>
	<a class="calm-voice" href="?page=project&id=1">Back to form list</a>
</header>

<form method="POST">

	<h1 class="exciting-voice">Paint Calculator</h1>

	<p class="regular-voice">How many gallons of paint do I need? Enter the length and width of the room in feet.</p>

	<div class="field">
		<label class="talking-voice">Length (feet)</label>
		<input class="regular-voice" type="number" name="length" min="0" value="<?=$length?>">
	</div>

	<div class="field">
		<label class="talking-voice">Width (feet)</label>
		<input class="regular-voice" type="number" name="width" min="0" value="<?=$width?>">
	</div>

	<button class="regular-voice" type="submit" name="submitted">Calculate</button>

</form>

<footer>
	<p class="<?=$answer?> talking-voice"><?=$message2?></p>
	<p class="<?=$answer?> regular-voice"><?=$message1?></p>
</footer>






