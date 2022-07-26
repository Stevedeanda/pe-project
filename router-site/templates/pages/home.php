

<header class="page-header">
	
	<h1><?=$pageData["title"]?></h1>
	<p><?=$pageData["intro"]?></p>

</header>

<section>

	<?php

		$sections = $pageData['sections'];
		foreach ($sections as $section) { 

		$heading = $section['heading'];?>

			<h2><?=$heading?></h2>

	<?php } ?>
	

</section>