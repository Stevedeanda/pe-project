

<h1>Should I buy this laptop???</h1>

<h2> Let's take a closer look at it...</h2>

<?php 
	
	$chip = "Apple M1 chip";
	$memory = 256;
	$year = 2021;
	$price = 2000;

	$message = "Gotta make sure it has the new $chip.";
	$messageOne = " It has more than {$memory}GB, good start.";
	$messageTwo = "It's newer than the year $year, so far so good.";
	$messageThree = " WOW, it's less than $ {$price}. Let's buy it now.";

	if ($chip = "Apple M1 chip"){
		echo $message;
	}

	if ($memory <= 512){
		echo $messageOne;
	} 

	if ($year <= 2022){
		echo $messageTwo;
	}

	if ($price >= 1500){
		echo $messageThree;
	}

?>

<section>

	<!-- <h1> Practicing array list</h1> -->
	
	<?php

		$child = [
			"name" => "Isabella",
			"weight" => 17.5,
			"height" => 25.5,
			"hair" => "black",
			"gender" => "girl",
			"eyes" => "brown",
			"age" => "7 months",
			"teeth" => 1,
		]



	?>


	<!-- <h1>My baby <?=$child["gender"]?>'s name is <?=$child["name"]?>.</h1> -->

	<!-- <p>She is <?=$child["age"]?> old and weights <?=$child["weight"]?> and has <?=$child["teeth"]?> teeth at the moment.</p> -->
</section>


<section>
	
	<?php 

		$movieCost = 11;

		if ($movieCost < 12) {
		   // echo " Let's go to the movies";
		} else {
		   echo " I'll stay home";
		}

	?>



</section>











