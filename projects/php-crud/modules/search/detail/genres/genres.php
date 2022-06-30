<?php include("data/playlist-data.php"); ?>

<?php
	//Initialize any variable I know I will need to use
	$currentGenre = null;

	//Check to see if any user input
	print_r($_GET);

	//Look at each playlist
	foreach ($genresData as $genres){
		//if its the right playlist get it
		if ($genres["id"] == $_GET["id"]){
			//This new variable is getting the data from the id it matched
			$currentGenre = $genres;
		}
	}


?>

<section class="genres">
	<div class="inner-column">



		<h1 class="loud-voice"><?=$currentGenre["title"]?></h1>

		<p>Playlist items go here</p>

		

	</div>
</section>