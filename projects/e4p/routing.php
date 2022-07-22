
<?php

function currentPage() {
	if ( isset($_GET["page"])){
		return $_GET["page"];
	} else {
		return "home";
	}
}

//I essentially made something like this but I didn't put the if statement on it. I tried to do it but I made it more complicated and left it outside the function and if statement. It worked for me but I would have had to put it on every single page. 


// function pageData () {
// 	$page = currentPage();
// 	$filePath = "data/pages/$page.json";
// 	//echo $dataPath;
// 	$json = file_get_contents($filePath);
// 	//added this to make sure there is data to get
// 	if (!$json) {
// 		//adding this (!) infront of the json means if there is no json. So if json does not exist it will give 404 data, but if it does exist it will continue.
// 		$json = file_get_contents("data/pages/404.json");
// 	}
// 	$pageData = json_decode($json, true);
// 	return $pageData;
// }


// use the top functions that gets the current page and use it in this function to get the template that goes with that page
function renderPageTemplate() {
	//$filePath = "pages/" . currentPage() . ".php";
	$filePath = "forms/" . currentPage() . ".php";
	//adding the data in here so it can get it with the template
	//$pageData = pageData();
	if ( file_get_contents($filePath)) {
		include($filePath);
	} else {
		include("pages/404.php");
	}
	
}

function addDashes($string) {
	$splitString = explode(" ", $string);
	$dashString = implode("-", $splitString);
	return strtolower($dashString);
}






