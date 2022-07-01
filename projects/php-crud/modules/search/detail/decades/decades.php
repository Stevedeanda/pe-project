<?php include("data/playlist-data.php"); ?>
<?php include("data/music-data.php"); ?>

<?php

	//Initialize any variable we will need later
	$currentDecades = null;
	$songs = [];

	//Check to see any user input
	//print_r($_GET);

	//Look at each playlist
	foreach ($decadesData as $decades) {
		//See if it matches the id
		if ($decades["id"] == $_GET["id"]) {

			$currentDecades = $decades;
		}
	}
?>

<section class="detail">
	<div class="inner-column">
		
		<h1 class="loud-voice"><?=$currentDecades['title']?></h1>

		<ul>

			<?php
			
			//loop thru the song array in genre
			foreach( $currentDecades['songs'] as $songId){
				//loop thru the music data
				foreach( $musicData as $song) {
					//compare to see if the song id in genres numbers match to the song id in music data
					if ($songId == $song['id']) {
						//echo $song['song'] . "<br>"; 
						//if they match, display songs ?>
						
						<li>
							<a href="#">
								
								<h2><?=$song['song']?></h2>
								<h3><?=$song['artist']?></h3>

							</a>
						</li>

					<?php } 
				}
			}
			?>

		</ul>
		
	</div>
</section>