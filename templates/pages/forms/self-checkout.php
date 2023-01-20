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
$softballQ = null;
$tabletP = 49.99;
$tabletQ = null;
$shirtP = 11.99;
$shirtQ = null;
$message1 = null;
$message2 = null;
$message3 = null;
$message4 = null;
$message5 = null;
$message6 = null;
$message7 = null;
$message8 = null;
$message9 = null;
$message10 = null;
$answer = "hide";

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
	$answer = "visible";
	$message10 = "This is to show what you submitted, the text highlighted in orange is what you input as well as the answer.";
	$message1 = "Softball total: <span>$$softballtotal</span>";
	$message2 = "Softball quantity: <span>$softballQ</span>";
	$message3 = "Tablet total: <span>$$tablettotal</span>";
	$message4 = "Tablet quantity: <span>$tabletQ</span>";
	$message5 = "T-Shirt total: <span>$$shirttotal</span>";
	$message6 = "T-Shirt quantity: <span>$shirtQ</span>";
	$message7 = "Subtotal: <span>$$subtotal</span>";
	$message8 = "Tax: <span>$$taxes</span>";
	$message9 = "Total: <span>$$total</span>";
}

?>

<header>
	<a class="calm-voice" href="?page=project&id=1">Back to form list</a>
</header>

<form method="POST">

	<h1 class="exciting-voice">Self-Checkout</h1>

	<p class="regular-voice">Store only has three items. It shows the cost of each item. At the bottom, select how much quantity you want of each item. You will get your total including taxes. Try some online shopping and see what the total is.</p>
	<ul class="regular-voice">
		<li class="list">Softball cost $5.99 each.</li>
		<li class="list">Bat cost $49.99 each.</li>
		<li class="list">T-Shirt cost $11.99 each.</li>
	</ul>

	<div class="field">
		<label class="talking-voice">Choose Softball quantity</label>
		<input class="regular-voice" type="number" name="softballQ" min="0" value="<?=$softballQ?>">
	</div>

	<div class="field">
		<label class="talking-voice">Choose Tablet quantity</label>
		<input class="regular-voice" type="number" name="tabletQ" min="0" value="<?=$tabletQ?>">
	</div>

	<div class="field">
		<label class="talking-voice">Choose T-Shirt quantity</label>
		<input class="regular-voice" type="number" name="shirtQ" min="0" value="<?=$shirtQ?>">
	</div>

	<button class="regular-voice" type="submit" name="submitted">Push me</button>

</form>

<output>
	<p class="<?=$answer?> talking-voice"><?=$message10?></p>
	<p id="outcome" class="<?=$answer?> regular-voice"><?=$message1?></p>
	<p class="<?=$answer?> regular-voice"><?=$message2?></p>
	<p class="<?=$answer?> regular-voice"><?=$message3?></p>
	<p class="<?=$answer?> regular-voice"><?=$message4?></p>
	<p class="<?=$answer?> regular-voice"><?=$message5?></p>
	<p class="<?=$answer?> regular-voice"><?=$message6?></p>
	<p class="<?=$answer?> regular-voice"><?=$message7?></p>
	<p class="<?=$answer?> regular-voice"><?=$message8?></p>
	<p class="<?=$answer?> regular-voice"><?=$message9?></p>
</output>







