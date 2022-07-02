<?php include("data/playlist-data.php"); ?>
<?php include("data/music-data.php"); ?>

<?php
	//Initialize any variable I know I will need to use
	$currentGenre = null;
	$songs = [];

	//Check to see if any user input
	//print_r($_GET);

	//Look at each playlist
	foreach ($genresData as $genre){
		//if its the right playlist get it
		if ($genre["id"] == $_GET["id"]){
			//This new variable is getting the data from the id it matched
			$currentGenre = $genre;
		}
	}
?>

<section class="detail">
	<div class="inner-column">

		<h1 class="loud-voice"><?=$currentGenre["title"]?></h1>

		<ul>

			<?php
			
			//loop thru the song array in genre
			foreach( $currentGenre['songs'] as $songId){
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