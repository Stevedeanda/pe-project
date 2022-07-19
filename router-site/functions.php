<?php

function queryString() {
	return $_SERVER['QUERY_STRING'];
}

function currentPage() {
	if ( isset($_GET["page"])){
		return $_GET["page"];
	} else {
		return "home";
	}
}
// use the top functions that gets the current page and use it in this function to get the template that goes with that page
function getPageTemplate() {
	$filePath = "pages/" . currentPage() . ".php";
	if ( file_get_contents("$filePath")) {
		include("$filePath");
	} else {
		include("pages/404.php");
	}
	
}
