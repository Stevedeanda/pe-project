
<!doctype html>

<?php

// show errors

function showErrors() {
  error_reporting(E_ALL);
  ini_set('display_errors', '1');
}

showErrors();

$page = null;

if (isset($_GET["page"])) {
	$page = $_GET["page"];
} else {
	$page = "home";
}

function queryString() {
	return $_SERVER['QUERY_STRING'];
}

function addDashes($string) {
	$splitString = explode(" ", $string);
	$dashString = implode("-", $splitString);
	return strtolower($dashString);
}

if ($page == "about") {
	$json = file_get_contents("pages/about/about.json");
	$aboutData = json_decode($json, true);
	$about = $aboutData["long"]; // If I put "short" it gives the smaller version of About.
}

?>

<html lang='en'>

	<head>
		<meta charset='utf-8'>
		<meta name='viewport' content='width=device-width, initial-scale=1'>

		<title>Steve DeAnda</title>
		<meta name='description' content='Steve DeAnda website'>
		<meta property='og:image' content='Welcome to my website!'>

		<link rel='stylesheet' href='styles/site.css'>
	</head>


	<body>
		<header class='site-menu'>
			<inner-column>

				<nav class="site-menu">
					<a href="?page=home">Home</a>
					<a href="?page=about">About</a>
					<a href="?page=projects">Projects</a>
					<a href="?page=resume">Resume</a>
					<a href="?page=contact">Contact</a>
				</nav>

			</inner-column>	
		</header>

		<main>

			<p>?<?=queryString();?></p>

			<?php

			if ($page == "home") {
				include("pages/home/home.php");
			}

			if ($page == "about") {
				include("pages/about/about.php");
			}

			if ($page == "projects") {
				include("pages/projects/projects.php");
			}

			if ($page == "resume") {
				include("pages/resume/resume.php");
			}

			if ($page == "contact") {
				include("pages/contact/contact.php");
			}

			if ($page == "forms") {
				include("pages/forms/forms.php");
			}

			$json = file_get_contents("pages/forms/forms.json");
			$formNames = json_decode($json, true);
			$forms = $formNames["forms"];

			foreach ($forms as $form) {
				if ($page == addDashes($form)) {
					include("pages/forms/exercises/" . addDashes($form). ".php");
				}
			}

			?>

		</main>

		<footer class='site-footer'>
			<inner-column>
				
				<nav class="site-menu">
					<a href="?page=home">Home</a>
					<a href="?page=projects">Projects</a>
					<a href="?page=about">About</a>
					<a href="?page=resume">Resume</a>
					<a href="?page=contact">Contact</a>
				</nav>

			</inner-column>
		</footer>
	</body>

</html>




