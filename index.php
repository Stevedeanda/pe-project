
<?php include('header.php'); ?>

			<p class="query">?<?=queryString();?></p>

			<?php

			// if ($page == "home") {
			// 	include("templates/pages/home/home.php");
			// }

			// if ($page == "about") {
			// 	include("templates/pages/about/about.php");
			// }

			// if ($page == "projects") {
			// 	include("templates/pages/projects/projects.php");
			// }

			// if ($page == "resume") {
			// 	include("templates/pages/resume/resume.php");
			// }

			// if ($page == "contact") {
			// }

			// if ($page == "forms") {
			// 	include("templates/pages/forms/forms.php");
			// }

			//include("templates/pages/$page/$page.php");

			// $json = file_get_contents("templates/pages/forms/forms.json");
			// $formNames = json_decode($json, true);
			// $forms = $formNames["forms"];

			// foreach ($forms as $form) {
			// 	if ($page == addDashes($form)) {
			// 		include("templates/pages/forms/exercises/" . addDashes($form). ".php");
			// 	}
			// }

			?>

<?php 	
//Use a if statement to get detail pages.
if ($_GET["page"] == "details") {
	//Get the detail data
	if ($json = file_get_contents("data/projects.json") ) {
		$detailData = json_decode($json, true);
		foreach ($detailData as $project) {
			if ($project['id'] == $_GET['id']) {
				$detail = $project;
				$m = $detail['module'];
			}
		}
		//Render the detail data
		//echo $detail['name'];
		include ( "templates/modules/$m/$m.php");
	}  
} else {
	// get the page data
	$json = file_get_contents("templates/pages/$page/$page.json");
	$pageData = json_decode($json, true);

	foreach ($pageData['sections'] as $section) {
		// include the right module file for this section
		$module = $section['module'];	// Get correct module template based on name
		include ( "templates/modules/$module/$module.php");
	} 
}

?>

<?php include ('footer.php'); ?>




