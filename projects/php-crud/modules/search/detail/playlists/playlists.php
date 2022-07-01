<?php include("data/playlist-data.php"); ?>
<?php include("data/music-data.php"); ?>

<?php

	//Initialize any variable we know we will need to use
	$currentPlaylist = null;
	$songs = [];

	//print_r($_GET);
	//See if their is any user input

	//Look at each playlist
	foreach ($playlistData as $playlist) {
		//if its the right playlist get it
		if ($playlist["id"] == $_GET["id"]){
			//This new variable is getting the data from the id it matched
			$currentPlaylist = $playlist;
			
		}
	}
?>
<section class="detail">
	<div class="inner-column">

		<h1 class="loud-voice"><?=$currentPlaylist["title"]?></h1>

		<ul>

			<?php

			//loop thru the song array in genre
			foreach( $currentPlaylist['songs'] as $songId){
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