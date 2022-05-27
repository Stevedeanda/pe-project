


<?php include("style.php"); ?>
<?php include("setup.php"); ?>
<?php include("meyer-reset.php"); ?>
​
<html lang='en'>
​
	<head>
		<title>title</title>
	</head>
​
	<body>
		<header class='site-header'>
			<div class='inner-column'>
​
				<nav class='menu'>
					<ul class='menu-list'>
						<li><a href='#'>Donate</a></li>
						<li><a href='#'>Volunteer</a></li>
						<li><a href='#'>Foster</a></li>
						<li><a href='#'>Adopt</a></li>
					</ul>
				</nav>
​
			</div>
		</header>
​
​
		<section class='welcome'>
			<div class='inner-column'>
				
				<h1 class='company-name'>Monsters for Adoption</h1>
​
				<ul class="monster-list">
					<!-- PHP will fill this out -->
​
					<?php
						
						// all the data about the monsters
						// this could also be in another file...
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
​
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
​
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
​
						$reads = [
							"id" => 764,
							"name" => "Miss reads-a lot",
							"favorite_food" => "Madeline cookies and tea",
							"age" => 9,
							"health" => "Good",
							"kids" => "Great",
							"monsters" => "Friendly",
							"adopted" => false,
							"portrait" => "https://peprojects.dev/alpha-4/steve/monsters/images/miss-reads-a-lot.jpg",
							"message" => "Miss reads a lot enjoys reading all types of book, she might read one outloud for you while you listen.",
						];
​
						$monsters = [$orangina, $shadow, $banana, $reads];
​
						// for every monster... run this block of code
						foreach ($monsters as $monster) {
​
							// get all the variables simplified 
							$message = $monster["message"];
							$food = $monster["favorite_food"];
							$portrait = $monster["portrait"];
							$id = $monster["id"];
							$name = $monster["name"];
							$story = "My favorite food is " . $monster["favorite_food"] . " and I am " . $monster["age"] . " years old.";
							$status = $monster["adopted"];
​
							// set human readable status message
							if ($status == 1) {
								$status = "Adopted";
							} else {
								$status = "Needs a home!";
							}
						?>
​
							<li class='monster'>
								<monster-card id='<?=$id?>'>
									<picture class='portrait'>
										<img src='<?=$portrait?>' width='200'>
									</picture>
​
									<h2 class='name'><?=$name?></h2>
								</monster-card>
							</li>
​
						<?php } // end the foreach loop ?>
​
				</ul>
​
			</div>
		</section>
​
	</body>
</html>