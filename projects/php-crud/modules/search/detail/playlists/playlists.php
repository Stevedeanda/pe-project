<?php include("data/playlist-data.php"); ?>


<?php

//Initialize any variable we know we will need to use
$currentPlaylist = null;



print_r($_GET);
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
<section class="playlists">
	<div class="inner-column">



		<h1 class="loud-voice"><?=$currentPlaylist["title"]?></h1>

		<p><?=$currentPlaylist["picture"]?></p>

		

	</div>
</section>