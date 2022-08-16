<section class="<?=$page?>">
	<inner-column>
		<list-items>
			<ul  class="<?=$section['list']?>">
				<?php
					// Need to pull data from inside the data
		
		      	foreach($section['items'] as $item) { 
		
		      	$item = $item["item"]; ?>
		
		          <li><?=$item?></li>
		
		      <?php } ?>
			</ul>
		</list-items>
	</inner-column>
</section>