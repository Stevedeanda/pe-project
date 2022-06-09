

<!DOCTYPE html>

<html lang="en">

	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<title>PHP practice forms</title>

		<meta name="description" content="PHP Forms">
		<meta property="og:image" content="https://peprojects.dev/alpha-4/steve/learning-php/learning-php-meta.png">
		<meta property="og:title" content="PHP">

		<?php include("style.php"); ?>

	</head>

	<body> 

		<section>

			<h1>PHP practice forms: </h1>

			<?php

				include("form-name-data.php");

				function addDashes($string) {
					$splitString = explode(" ", $string);
					$dashString = implode("-", $splitString);
					return strtolower($dashString);
				}

				foreach ($formName as $form) {
					$fileName = addDashes($form) . ".php"; ?>

					<ul>
						<li><a href="<?=$fileName?>"><?=$form?></</a></li>
					</ul>

			<?php	} ?>


		</section>	
	</body>
</html>			

	
	





	