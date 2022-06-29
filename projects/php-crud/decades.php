<?php include("playlist-data.php"); ?>

<?php

//Initialize any variable we will need later
$currentDecades = null;

//Check to see any user input
print_r($_GET);

//Look at each playlist
foreach ($decadesData as $decades) {
	//See if it matches the id
	if ($decades["id"] == $_GET["id"]) {

		$currentDecades = $decades;
	}
}

?>

<section class="decades">
	<div class="inner-column">
		
		<h1 class="loud-voice"><?=$currentDecades['title']?></h1>

		<p>Playlist items go here</p>
		
	</div>
</section>