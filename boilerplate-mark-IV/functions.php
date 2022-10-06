
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

// if ($page == "about") {
// 	$json = file_get_contents("templates/pages/about/about.json");
// 	$aboutData = json_decode($json, true);
// 	$about = $aboutData["long"]; // If I put "short" it gives the smaller version of About.
// }

// if ($page == "projects") {
// 	$json = file_get_contents("templates/pages/projects/projects.json");
// 	$projectsData = json_decode($json, true);
// }

?>