

<list-items class="<?=$section['list']?>">
	<h2 class="bold-voice"><?=$section['list-name']?></h2>
	<hr>
	<ul>
		<?php
			// Need to pull data from inside the data

      	foreach($section['items'] as $item) { 
      	$item["item"] = $item["item"] ?? "A single list item can go in here";
      	$item = $item["item"]; ?>

          <li class="calm-voice"><?=$item?></li>

      <?php } ?>
	</ul>
</list-items>
