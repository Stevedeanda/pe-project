
<!DOCTYPE html>

<html lang="en">

	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<title>E-commerce Website</title>

		<meta name="description" content="#######">
		<meta property="og:image" content="https://peprojects.dev/alpha-4/steve/learning-php/learning-php-meta.png">
		<meta property="og:title" content="##########">

		<?php include("style.php"); ?>
		<?php include("setup.php"); ?>
		<?php include("meyer-reset.php"); ?>

	</head>

	<body>

		<?php // include("header.php"); ?>

		<section>

			<div class="inner-column">

				<h1 class="title">Techtropolis</h1>

				<ul class="product-list">
			
					<?php

					$json = file_get_contents("data.json");

					$audiophileData = json_decode($json, true);

					$productData = $audiophileData["products"];

					foreach($productData as $audio) {

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
								<div class="top">
									<h2 class="name"><?=$name?></h2>
									<p class="brand"><?=$brand?></p>
								</div>

								<picture class="visual">
									<img src="<?=$image?>" width="200">
								</picture>

								<p class="price">$<?=$price?></p>

								<details>
									<summary><h3>Features</h3></summary>
										<ul class="features">
											
											<?php 
											foreach($features as $feature) { ?>
											<li class="feature"><?=$feature?></li>
											<?php } ?>
										</ul>
								</details>
								<p class="description"><?=$description?></p>
							</product-card>
						</li>

						<?php } ?>

				</ul>

			</div>

		</section>

		<?php // include("footer.php"); ?>

	</body>

</html>