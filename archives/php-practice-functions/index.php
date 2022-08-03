
<header style="font-size: 20px">
<?php

	function monsterGenerator($name, $age, $favoriteFood) {
		$monster = [
			"name" => $name,
			"age" => $age,
			"favoriteFood" => $favoriteFood,
		];
		return $monster;
	}

	$crunchy = monsterGenerator("Crunchy", 6, "tacos");
	$crusty = monsterGenerator("Crusty", 6, "old bread");
	$dusty = monsterGenerator("Dusty", 6, "cola");
	$chunky = monsterGenerator("Chunky", 6, "salads");
	$chubby = monsterGenerator("Chubby", 6, "tacos");

	$monsters = [$crunchy, $crusty, $dusty, $chunky, $chubby];

	?>

	<?php foreach ($monsters as $m) { ?>

		<li class="monster">
		<monster-card>

			<h2 class="name">Hello, my name is <?=$m["name"]?></h2>

			<p class="message"><?=$m["age"]?> years old</p>

			<p class="message">Favorite food is <?=$m["favoriteFood"]?></p>

		</monster-card>

	</li>




	<?php } ?>



</header>









































































<?php include("style.php"); ?>
<?php //include("setup.php"); ?>
<?php //include("meyer-reset.php"); ?>

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
?>
	
<ol class='list'>

<?php $monsters = [$orangina, $shadow, $banana, $reads]; ?>

<?php	foreach ($monsters as $monster) { ?>
	<?php
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

	?>	

	<li class="monster">
		<monster-card id='<?=$id?>'>

			<picture class="portrait">
				<img src='<?=$portrait?>' width='200'>
			</picture>

			<h2 class="name"><?=$name?></h2>

			<p class="message"><?=$story?></p>

			<a class="status" href='#'><?=$status?></a>

		</monster-card>

	</li>

<?php } ?>

</ol>




















