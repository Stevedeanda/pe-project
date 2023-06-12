<h1 class="title">Techtropolis</h1>

<p class="intro">Here you will find all the best audio equipment you will need to listen to your music.</p>

<ul class="product-list">
			
	<?php

	$json = file_get_contents("data/data.json");

	$audiophileData = json_decode($json, true);
	

	$productData = $audiophileData["products"];
	// var_dump ($productData["63"]);
	
	foreach($productData as $audio) {

		$id = $audio["id"];
		$image = $audio["image"];
		$brand = $audio["brand"];
		$name = $audio["name"];
		$color = $audio["color"];
		$category = $audio["category"];
		$tagline = $audio["tagline"];
		$description = $audio["description"];
		$price = $audio["price"];
		$features = $audio["features"];
		$onSale = $audio["on-sale"];
		$stock = $audio["stock"]; ?>



	  <li class="product">
			<product-card>
				<a href="?page=product&id=<?=$id?>">
					<div class="top">
						<h2 class="name"><?=$name?></h2>
						<p class="brand"><?=$brand?></p>
						<p class="brand"><?=$id?></p>
					</div>
				
					<picture class="visual">
						<img src="<?=$image?>">
					</picture>
			
					<!-- <p class="price">$<?=$price?></p>
			
					<details>
						<summary>
							Features
						</summary>
							<ul class="features">
								
								<?php 
								foreach($features as $feature) { ?>
								<li class="feature"><?=$feature?></li>
								<?php } ?>
							</ul>
					</details>
					<p class="description"><?=$description?></p> -->
				</a>
			</product-card>
		</li>

		<?php } ?>

</ul>