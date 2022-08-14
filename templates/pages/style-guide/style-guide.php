<?php 	

// get the page data
$json = file_get_contents('templates/pages/style-guide/style-guide.json');
$pageData = json_decode($json, true);

// render the title
echo $pageData['title'];

// render the description
echo $pageData['description'];
// render the sections 
foreach ($pageData['sections'] as $section) {
	// include the right module file for this section
	$module = $section['module'];	// Get correct module template based on name
	include ( "templates/modules/$module/$module.php");
}
