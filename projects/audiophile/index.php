
<!DOCTYPE html>

<?php

// show errors

function showErrors() {
  error_reporting(E_ALL);
  ini_set('display_errors', '1');
}

showErrors();

$page = null;

if (isset($_GET["page"])) {
	$page = $_GET["page"];
} else {
	$page = "home";
}

?>

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

		<main>

			<section>

				<inner-column>


					<?php 
						$_GET["page"] = $page;
						if ($_GET["page"] == "product") {
							//Get the detail data
							if ($json = file_get_contents("data/data.json") ) {
								$audiophileData = json_decode($json, true);
								$productData = $audiophileData["products"];
								foreach($productData as $audio) {
									if ($audio['id'] == $_GET['id']) {
										$id = $audio['id'];
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
										$stock = $audio["stock"];
									}
								}
								//Render the detail data
								//echo $detail['name']; ?>

									<?php include ( "pages/products/product.php"); ?>

							<?php } 
						} else {
							// get the page data
							if ($page == "home") {
							include("pages/home.php");
							}
						}	
					?>

				</inner-column>

			</section>

		</main>

		<?php // include("footer.php"); ?>

	</body>

</html>