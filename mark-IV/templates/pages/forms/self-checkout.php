<?php 

function getItemTotal($price, $quantity) {
	return ($price * $quantity);
}

function getSubTotal($one, $two, $three) {
	return ($one + $two + $three);
}

function getTaxes($subtotal) {
	return ($subtotal * (5.5/100));
}

$softballP = 5.99;
$softballQ = 0;
$tabletP = 49.99;
$tabletQ = 0;
$shirtP = 11.99;
$shirtQ = 0;
$message1 = null;
$message2 = null;
$message3 = null;
$message4 = null;
$message5 = null;
$message6 = null;
$message7 = null;
$message8 = null;
$message9 = null;

if ( isset($_POST['submitted'])) {
	if (isset($_POST['softballQ'])) {
		$softballQ = $_POST['softballQ'];
		$softballtotal = getItemTotal($softballP, $softballQ);
		//echo $softballtotal;
				
	}
	if (isset($_POST['tabletQ'])) {
		$tabletQ = $_POST['tabletQ'];
		$tablettotal = getItemTotal($tabletP, $tabletQ);
	}
	if (isset($_POST['shirtQ'])) {
		$shirtQ = $_POST['shirtQ'];
		$shirttotal = getItemTotal($shirtP, $shirtQ);
	}

	$subtotal = getSubTotal($softballtotal, $tablettotal, $shirttotal);

	$taxes = round(getTaxes($subtotal), 2);

	$total = $subtotal + $taxes;

	//echo $total;

	$message1 = "Softball price: $" . $softballP;
	$message2 = "Softball quantity: $softballQ";
	$message3 = "Tablet price : $" . $tabletP;
	$message4 = "Tablet quantity: $tabletQ";
	$message5 = "T-Shirt price: $" . $shirtP;
	$message6 = "T-Shirt quantity: $shirtQ";
	$message7 = "Subtotal: $" . $subtotal;
	$message8 = "Tax: $" . $taxes;
	$message9 = "Total: $" . $total;
}


?>

<header>
	<a class="calm-voice" href="?page=project&id=1">Back to form list</a>
</header>

<form method="POST">

	<h1 class="exciting-voice">Self-Checkout</h1>

	<p class="regular-voice">Online shopping, what's the total?</p>
	<!-- <ul class="items">
		<li class="list">Softballs cost $5.99</li>
		<li class="list">Tablets cost $49.99</li>
		<li class="list">T-Shirt cost $11.99</li>
	</ul> -->

	<div class="field">
		<label class="talking-voice">Choose Softball quantity</label>
		<input type="number" name="softballQ" min="0" value="<?=$softballQ?>">
	</div>

	<div class="field">
		<label class="talking-voice">Choose Tablet quantity</label>
		<input type="number" name="tabletQ" min="0" value="<?=$tabletQ?>">
	</div>

	<div class="field">
		<label class="talking-voice">Choose T-Shirt quantity</label>
		<input type="number" name="shirtQ" min="0" value="<?=$shirtQ?>">
	</div>

	<button type="submit" name="submitted">Push me</button>

	<p class="regular-voice"><?=$message1?></p>
	<p class="regular-voice"><?=$message2?></p>
	<p class="regular-voice"><?=$message3?></p>
	<p class="regular-voice"><?=$message4?></p>
	<p class="regular-voice"><?=$message5?></p>
	<p class="regular-voice"><?=$message6?></p>
	<p class="regular-voice"><?=$message7?></p>
	<p class="regular-voice"><?=$message8?></p>
	<p class="regular-voice"><?=$message9?></p>

</form>