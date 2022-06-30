<?php include("data/playlist-data.php"); ?>

<?php
//Initialize any variable you will need later
$myplaylist = null;

//Check for user input
print_r($_GET);

//Look at each playlist
foreach ($libraryData as $library) {
	//If the right playlist get it
	if ($library["id"] == $_GET["id"]){

		//New variable is getting data from the id it matched 
		$myplaylist = $library;
	}
}

?>

<section class="library">
	<div class="inner-column">



		<h1 class="loud-voice"><?=$myplaylist["title"]?></h1>

		<p>Playlist items go here</p>

		

	</div>
</section>