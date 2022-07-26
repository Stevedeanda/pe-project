

<header class="page-header">
	
	<h1><?=$pageData["title"]?></h1>
	<p><?=$pageData["intro"]?></p>

</header>

<section>

<?php

	$sections = $pageData['sections'];
	foreach ($sections as $section) { 

		if ($section["module"] == "grid_list") {
			include('partials/grid-list.php');
		}
		if ($section["module"] == "generic_text") {
			include('partials/generic-text.php');
		}

			
	} 
?>
	
