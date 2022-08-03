
<header class="page-header">
	
	<h1><?=$pageData["title"]?></h1>
	<p><?=$pageData["intro"]?></p>

</header>

<section>

	<ul>

	<?php

		$sections = $pageData['sections'];
		foreach ($sections as $section) { 

		$heading = $section['heading'];
		$items = $section['items']; ?>
			<li>
				<h2><?=$heading?></h2>
			

			<?php 

			foreach ($items as $item){
				$title = $item['title']; 
				$text = $item['text']; ?>
			

				<h3><?=$title?></h3>
				<p><?=$text?></p>

			<?php } ?>
			</li>
	<?php } ?>

	</ul>
	

</section>