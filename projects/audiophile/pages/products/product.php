<?php

	$json = file_get_contents("data/data.json");

	$audiophileData = json_decode($json, true);
	

	$productData = $audiophileData["products"];

	?>

<h1>Hello</h1>
<h2 class="name"><?=$id?></h2>
<h2 class="name"><?=$name?></h2>
<h2 class="name"><?=$brand?></h2>
<h2 class="name"><?=$price?></h2>
<picture class="visual">
	<img src="<?=$image?>">
</picture>
<a href=?page=home>Home</a>