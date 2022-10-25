<?php 

$section['list-name'] = $section['list-name'] ?? "";
$item = $item ?? "";
$section['items'] = $section['items'] ?? "";
$section['class-one'] = $section['class-one'] ?? "";
$section['class-two'] = $section['class-two'] ?? "";


?>

<list-items class="<?=$section['list']?>">
	<h2 class="<?=$section['class-one']?>"><?=$section['list-name']?></h2>
	<hr>
	<ul>
		<?php
			// Need to pull data from inside the data

      	foreach($section['items'] as $item) { 
      	$item["item"] = $item["item"] ?? "";
      	$item = $item["item"]; ?>

          <li class="<?=$section['class-two']?>"><?=$item?></li>

      <?php } ?>
	</ul>
</list-items>
