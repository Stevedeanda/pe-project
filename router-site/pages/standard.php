

<header class="page-header">
	
	<h1><?=$pageData["title"]?></h1>
	<p><?=$pageData["intro"]?></p>

</header>

<section>

	<?php

		$sections = $pageData['sections'];
		foreach ($sections as $section) { 

		$heading = $section['heading'];
		$par = $section['par'];?>

			<h2><?=$heading?></h2>
			<p><?=$par?></p>

			
	<?php } ?>
	
</section>