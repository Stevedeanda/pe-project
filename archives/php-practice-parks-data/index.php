

<section>

	<style>
		
		park-card {
			display: block;
			border: 1px solid gray;
			padding: 10px;
			background-color: wheat;
		}

		park-card.closed {
			background-color: #ffc6c6;
		}
	</style>
	
	<?php

	$parks = [
		[
			"name" => "Arches National Park",
			"location" => "Utah",
			"open" => false,
			"notableSites" => ["Rock formations", "Rainbow Arch"],
		],

		[
			"name" => "Yosemite National Park",
			"location" => "California",
			"open" => true,
			"notableSites" => ["Half Dome", "Bears"],
		],
		[
			"name" => "Big Bend",
			"location" => "Texas",
			"open" => true,
			"notableSites" => ["Forest", "Backpacking Campsites"],
		],
		[
			"name" => "Rocky Mountains",
			"location" => "Colorado",
			"open" => false,
			"notableSites" => ["Hikes", "Snow"],
		],
	];


	?>


	<?php 	

		function renderNotableSights($sights) {
				if ($sights) {
					echo "<ul>";
					foreach ($sights as $site) {
						echo "<li>$site</li>";
					}
					echo "</ul>";
				} else {
					echo "There are no sites written for this park.";
				}
		};

	?>		



	<?php foreach ($parks as $park) { ?>

		<?php
			$status = "Closed";
			$statusStyle = "closed";

			if ( $park["open"] ) {
				$status = "Open";
				$statusStyle = "open";
			};

		?>

		<park-card class="<?=$statusStyle?>">
			<h2><?=$park["name"]?></h2>
			<p>Status: <?=$status?></p>	
			<?=renderNotableSights($park["notableSites"])?>
		</park-card>

	<?php } ?>

</section>


















