
<!DOCTYPE html>

<html>

	<head>

		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<meta name="description" content="Without vision the people perish, here is my vision!">
		<meta property="og:image" content="https://peprojects.dev/alpha-4/steve/goals/images/vision.jpg">
		<meta property="og:title" content="Goals">

		<link rel="stylesheet" href="css/style.css">

		<title>Steve's Goals</title>

	</head>

	<body>

		<header class="inner-column">

			<h1>Goals</h1>

		</header>

		<main class="inner-column">
			
			<h2>5 year vision</h2>

			<?php
			// Pull in JSON data into our PHP build to create articles.

			$json = file_get_contents("fiveYear.json");
			$five_year = json_decode($json, true);
			$yearsGoals = $five_year["fiveYear"];
			?>

			<ul class="vision-lists">
				<?php

            foreach ($yearsGoals as $yearsGoal) { ?>
                <li><?= $yearsGoal ?></li>

            <?php } ?>
			</ul>


			<h2>End of the course vision</h2>

			<?php
			// Pull in JSON data into our PHP build to create articles.

			$json = file_get_contents("course.json");
			$course = json_decode($json, true);
			$courseGoals = $course["course"];
			?>

			<ul class="vision-lists">
				<?php

            foreach ($courseGoals as $courseGoal) { ?>
                <li><?= $courseGoal ?></li>

            <?php } ?>
			</ul>


			<h2>End of the month vision</h2>

			<?php
			// Pull in JSON data into our PHP build to create articles.

			$json = file_get_contents("monthVision.json");
			$monthVision = json_decode($json, true);
			$monthGoals = $monthVision["monthVision"];
			?>

			<ul class="vision-lists">
				<?php

            foreach ($monthGoals as $monthGoal) { ?>
                <li><?= $monthGoal ?></li>

            <?php } ?>
			</ul>

		</main>

	</body>

</html>
