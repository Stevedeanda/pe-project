
<section>
	<h2><?=$section['heading']?></h2>

	<ul>
	<?php

		foreach($section['items'] as $item) {
			//print_r($item);

			$title = $item['title'];
			$text = $item['text']; ?>

			<li>
				<h3><?=$title?></h3>
				<p><?=$text?></p>
			</li>

		<?php } ?>

	</ul>
	
</section>