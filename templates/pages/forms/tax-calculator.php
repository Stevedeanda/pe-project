<?php

	function getPercent($percent) {
		return round(($percent /100), 3);
	}

	function getTax($money, $rate) {
		return ($money * $rate);
	}

	$order = null;
	$percent = 5.5;
	$message = null;
	$message1 = null;
	$message2 = null;
	$message3 = null;
	$message4 = null;
	$message5 = null;
	$message6 = null;
	$message7 = null;
	$message8 = null;
	$answer = "hide";
	$answer = "hide";


	if (isset($_POST["submitted"])) {
		if (isset($_POST["order"])) {
			$order = $_POST["order"];
		}
		if (isset($_POST["state"])) {
			$state = $_POST["state"];
			if ($state == "WI") {
				//echo "Wisconsin";
				$percentrate = getPercent($percent);
				//echo $percentrate;
				$tax = round(getTax($percentrate, $order), 2);
				//echo $tax;
				$total = round(($order + $tax), 2);
				//echo $total;
				$answer = "visible";
				$answer2 = "hide";
				$message = "The state you are in: <span>$state";
				$message1 = "The subtotal is <span>$$order</span>.";
				$message2 = "The tax is $$tax</span>.";
				$message3 = "The total is <span>$$total</span>.";
				$message5 = "This is to show what you submitted, the text highlighted in orange is what you input";
			} else {
				$answer = "hide";
				$answer2 = "visible";
				$message6 = "The state you are in: <span>$state</span>.";
				$message7 = "No state tax, your order amount is <span>$$order</span>.";
				$message8 = "This is to show what you submitted, the text highlighted in orange is what you input";
			}
		}
	}


?>

<header>
	<a class="calm-voice" href="?page=project&id=1">Back to form list</a>
</header>

<form method="POST">

	<h1 class="exciting-voice">Tax Calculator</h1>

	<p class="regular-voice">Does your total include tax? Let's find out. Only one state has tax applied to it. Here is a hint, it starts with the letter "W".</p>

	<div class="field">
		<label class="talking-voice">Order Amount</label>
		<input class="regular-voice" type="number" name="order" min=0 step=0.01 value="<?=$order?>">
	</div>

	<div class="field">
		<label class="talking-voice" for="states">Choose your State:</label>

		<select class="regular-voice" name="state" id="states" required="required">
		    <option value="">--Scroll to choose your State--</option>
		    <option value="AL">Alabama</option>
			<option value="AK">Alaska</option>
			<option value="AZ">Arizona</option>
			<option value="AR">Arkansas</option>
			<option value="CA">California</option>
			<option value="CO">Colorado</option>
			<option value="CT">Connecticut</option>
			<option value="DE">Delaware</option>
			<option value="DC">District Of Columbia</option>
			<option value="FL">Florida</option>
			<option value="GA">Georgia</option>
			<option value="HI">Hawaii</option>
			<option value="ID">Idaho</option>
			<option value="IL">Illinois</option>
			<option value="IN">Indiana</option>
			<option value="IA">Iowa</option>
			<option value="KS">Kansas</option>
			<option value="KY">Kentucky</option>
			<option value="LA">Louisiana</option>
			<option value="ME">Maine</option>
			<option value="MD">Maryland</option>
			<option value="MA">Massachusetts</option>
			<option value="MI">Michigan</option>
			<option value="MN">Minnesota</option>
			<option value="MS">Mississippi</option>
			<option value="MO">Missouri</option>
			<option value="MT">Montana</option>
			<option value="NE">Nebraska</option>
			<option value="NV">Nevada</option>
			<option value="NH">New Hampshire</option>
			<option value="NJ">New Jersey</option>
			<option value="NM">New Mexico</option>
			<option value="NY">New York</option>
			<option value="NC">North Carolina</option>
			<option value="ND">North Dakota</option>
			<option value="OH">Ohio</option>
			<option value="OK">Oklahoma</option>
			<option value="OR">Oregon</option>
			<option value="PA">Pennsylvania</option>
			<option value="RI">Rhode Island</option>
			<option value="SC">South Carolina</option>
			<option value="SD">South Dakota</option>
			<option value="TN">Tennessee</option>
			<option value="TX">Texas</option>
			<option value="UT">Utah</option>
			<option value="VT">Vermont</option>
			<option value="VA">Virginia</option>
			<option value="WA">Washington</option>
			<option value="WV">West Virginia</option>
			<option value="WI">Wisconsin</option>
			<option value="WY">Wyoming</option>
		</select>
	</div>

	<button class="regular-voice"name="submitted" type="submit">Calculate</button>

</form>

<output>
	<p class="<?=$answer?> talking-voice"><?=$message5?></p>
	<p class="<?=$answer2?> talking-voice"><?=$message8?></p>
	<p class="<?=$answer?> regular-voice"><?=$message?></p>
	<p class="<?=$answer?> regular-voice"><?=$message1?></p>
	<p class="<?=$answer?> regular-voice"><?=$message2?></p>
	<p class="<?=$answer?> regular-voice"><?=$message3?></p>
	<p class="<?=$answer2?> regular-voice"><?=$message6?></p>
	<p class="<?=$answer2?> regular-voice"><?=$message7?></p>
</output>








