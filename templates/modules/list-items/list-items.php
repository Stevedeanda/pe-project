

<list-items>
	<ul  class="<?=$section['list']?>">
		<?php
			// Need to pull data from inside the data

      	foreach($section['items'] as $item) { 
      	$item["item"] = $item["item"] ?? "A single list item can go in here";
      	$item = $item["item"]; ?>

          <li><?=$item?></li>

      <?php } ?>
	</ul>
</list-items>
