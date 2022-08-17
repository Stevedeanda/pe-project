


<?php include("style.php"); ?>
<?php include("setup.php"); ?>
<?php include("meyer-reset.php"); ?>

<?php

	$orangina = [
		"id" => 1049,
		"name" => "Orangina",
		"favorite_food" => "Chicken nuggets",
		"age" => 2,
		"health" => "Good",
		"kids" => "Great",
		"monsters" => "Friendly",
		"adopted" => false,
		"portrait" => "https://peprojects.dev/alpha-4/steve/monsters/images/orangina.jpg",
		"message" => "Orangina is a wonderful monster that loves to play all day and is curious about everything.",
	];

	$shadow = [
		"id" => 1856,
		"name" => "Shadow",
		"favorite_food" => "Pumpkins",
		"age" => 7,
		"health" => "Good",
		"kids" => "Great",
		"monsters" => "Friendly",
		"adopted" => false,
		"portrait" => "https://peprojects.dev/alpha-4/steve/monsters/images/shadow.jpg",
		"message" => "Shadow loves to follow people's shadow and he can spend all day chasing his own.",
	];

	$banana = [
		"id" => 1256,
		"name" => "Mr.Banana",
		"favorite_food" => "Bananas",
		"age" => 4,
		"health" => "Good",
		"kids" => "Great",
		"monsters" => "Friendly",
		"adopted" => false,
		"portrait" => "https://peprojects.dev/alpha-4/steve/monsters/images/mr-banana.jpg",
		"message" => "Mr. Banana loves bananas, he will share one with you if you ask nicely.",
	];

	$reads = [
		"id" => 764,
		"name" => "Miss reads a lot",
		"favorite_food" => "Madeline cookies and tea",
		"age" => 9,
		"health" => "Good",
		"kids" => "Great",
		"monsters" => "Friendly",
		"adopted" => false,
		"portrait" => "https://peprojects.dev/alpha-4/steve/monsters/images/miss-reads-a-lot.jpg",
		"message" => "Miss reads a lot enjoys reading all types of book, she might read one outloud for you while you listen.",
	];

	echo "<body class='body'>";

	echo "<header class='welcome'>";

	echo "<nav class='menu'>";

	echo "<ul class='menu-list'>";

	echo "<li><a href='#'>Donate</a></li>";
	echo "<li><a href='#'>Volunteer</a></li>";
	echo "<li><a href='#'>Foster</a></li>";
	echo "<li><a href='#'>Adopt</a></li>";
		    
	echo "</ul>";

	echo "</nav>";

	echo "</header>";

	echo "<section class='inner-column'>";

	echo "<div class='company'>";

	echo "<h1 class='company-name'>
			Monsters for Adoption
			</h1>";

	echo "</div>";

	echo "<ol class='list'>";

	$monsters = [$orangina, $shadow, $banana, $reads];

	foreach ($monsters as $monster) {
		$message = $monster["message"];
		$food = $monster["favorite_food"];
		$portrait = $monster["portrait"];
		$id = $monster["id"];
		$name = $monster["name"];
		$story = "My favorite food is " . $monster["favorite_food"] . " and I am " . $monster["age"] . " years old.";
		$status = $monster["adopted"];

		// set human readable status message
		if ($status == 1) {
			$status = "Adopted";
		} else {
			$status = "Needs a home!";
		}

		echo "<li class='monster'>";

		echo
			"<monster-card id='" . $id . " '>" .

				"<picture class='portrait'>" .
					"<img src='" . $portrait . "' width='200'>" .
				"</picture>" .

				"<h2 class='name'> My name is " . $name . " and I love " . $food . ".</h2>" .

				"<p class='message'>" . $message . "</p>" .

				"<a class='status' href='#''>" . $status . "</a>".

			"</monster-card>";

		echo "</li>";


	}


	echo "</ol>";

	echo "</section>";

	echo "</body>";

?>

