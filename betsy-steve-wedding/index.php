

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
		
		<?php include ('templates/modules/site-menu/site-menu.php'); ?>

		<main class="<?=$page?>-main">

			<section class="<?=$page?>-section">
				<inner-column>


<!-- <p class="query">?<?=queryString();?></p> -->

<?php 
$_GET["page"] = $page;
if ($_GET["page"] == "forms") {
	if ($json = file_get_contents("templates/pages/forms/forms.json") ) {
		$formsData = json_decode($json, true);
		foreach ($formsData as $form) {
			if ($form['id'] == $_GET['id']) {
				$theform = $form;
				$module = $theform['module'];
			}
		} ?>


			<?php include ("templates/pages/forms/$module.php"); ?>


	<?php } 
} else if ($_GET["page"] == "project") {
	//Get the detail data
	if ($json = file_get_contents("data/projects.json") ) {
		$detailData = json_decode($json, true);
		foreach ($detailData as $project) {
			if ($project['id'] == $_GET['id']) {
				$detail = $project;
				$module = $detail['module'];
			}
		}
		//Render the detail data
		//echo $detail['name']; ?>

			<?php include ( "templates/modules/$module/$module.php"); ?>

	<?php } 
} else {
	// get the page data
	$json = file_get_contents("templates/pages/$page/$page.json");
	$pageData = json_decode($json, true);

	foreach ($pageData['sections'] as $section) {
		// include the right module file for this section
		$module = $section['module'];	// Get correct module template based on name 
		$section['class'] = $section['class'] ?? "";?>
		
			<?php include ( "templates/modules/$module/$module.php");?>

	<?php } 
}	
?>

				</inner-column>
			</section>
	
		</main>

	</body>

</html>




