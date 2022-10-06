

<!doctype html>

<?php include ('functions.php'); ?>

<html lang='en'>

	<head>
		<meta charset='utf-8'>
		<meta name='viewport' content='width=device-width, initial-scale=1'>

		<title>Steve DeAnda</title>
		<meta name='description' content='Steve DeAnda website'>
		<meta property='og:image' content='Welcome to my website!'>

		<link rel='stylesheet' href='style/site.css'>
	</head>


	<body>

		<?php include ('templates/modules/template-guide/template-guide.php'); ?>

		<main>

			<p class="query">?<?=queryString();?></p>

			<?php
			$json = file_get_contents("data/$page.json");
			$pageData = json_decode($json, true);

				foreach ($pageData as $data) {
					//echo $data['name'];
					foreach ($data['sections'] as $section) {
						$module = $section['module'];
						//echo $module; ?>
						<?php include ( "templates/modules/$module/$module.php");?>
					<?php }
				}
			?>

		</main>

		<?php include ('templates/modules/template-guide/template-guide.php'); ?>

	</body>

</html>


