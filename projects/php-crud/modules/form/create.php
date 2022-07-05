<?php

	$song = null;
	$album = null;
	$artist = null;
	$genre = "";
	$year = 0;
	$picture = null;

	$addSong = false;
	$addAlbum = false;
	$addArtist = false;
	$addYear = false;

	$songError = false;
	$albumError = false;
	$artistError = false;

	if ( isset($_POST["add"]) ) {
		
		if ( isset($_POST["song"]) ) {
			$song = $_POST["song"];
			if (strlen($song) > 0 ) {
				$addSong = true;

				// $newMusic = [
				// 	"song" => $song;
				// ];

				//Create Song

				//Save Song


			} else {
				$songError = "Please add song title.";
			}
		}

		if ( isset($_POST["album"]) ) {
			$album = $_POST["album"];
			if (strlen($album) > 0 ) {
				$addAlbum = true;
			} else {
				$albumError = "Please add album title.";
			}
		}

		if ( isset($_POST["artist"]) ) {
			$artist = $_POST["artist"];
			if (strlen($artist) > 0 ) {
				$addArtist = true;
			} else {
				$artistError = "Please add artist or band name.";
			}
		}

		//Not sure how to get it to pick a checked genre???
		if ( isset($_POST["genre"]) ) {
			$genre = $_POST["genre"];
			
		}

		if ( isset($_POST["year"]) ) {
			$year = $_POST["year"];
			if ($year > 1969 && $year < 2023) {
				$addYear = true;
			}
		}

		if ( isset($_POST["picture"]) ) {
			$picture = $_POST["picture"];
			
		}

		if ($addSong && $addAlbum && $addArtist && $addYear) {
			$music = [
				$song => $_POST["song"],
				$album => $_POST["album"],
				$artist => $_POST["artist"],
				$genre => $_POST["genre"],
				$year => $_POST["year"],
				$picture => $_POST["picture"],
			];

			var_dump($music);
		} else {
			echo "MISSING SOMETHING";
		}
	}

?> 

<section class="form">
	<div class="inner-column">

		<h1 class="loud-voice">Add a Song</h1>

		<form method="POST">
			<field>
				<label>Song</label>
				<input type="text" name="song" value='<?=$song?>'>
				<?php if ($songError) { ?>
					<p class="error"><?=$songError?></p>
				<?php } ?>
			</field>

			<field>
				<label>Album</label>
				<input type="text" name="album" value='<?=$album?>'>
				<?php if ($songError) { ?>
					<p class="error"><?=$albumError?></p>
				<?php } ?>
			</field>

			<field>
				<label>Artist</label>
				<input type="text" name="artist" value='<?=$artist?>'>
				<?php if ($songError) { ?>
					<p class="error"><?=$artistError?></p>
				<?php } ?>
			</field>

			<field>
				<p>Please select the Genre for this song</p>
				<div class="radio">
					<input type="radio" id="Rock" name="genre" value="Rock">
					<label for="rock">Rock</label>
				</div>
				<div class="radio">
					<input type="radio" id="Hip-Hop" name="genre" value="Hip-Hop">
					<label for="hip-hop">Hip-Hop</label>
				</div>
				<div class="radio">
					<input type="radio" id="EDM" name="genre" value="EDM">
					<label for="edm">EDM</label>
				</div>
				<div class="radio">
					<input type="radio" id="Latin" name="genre" value="Latin">
					<label for="latin">Latin</label>
				</div>
				<div class="radio">
					<input type="radio" id="Pop" name="genre" value="Pop">
					<label for="pop">Pop</label>
				</div>
				<div class="radio">
					<input type="radio" id="Other" name="genre" value="Other" checked>
					<label for="other">Other</label>
				</div>
			</field>

			<field>
				<label>Year of Song/Album</label>
				<input type="number" min="1970" max="2022" name="year" value='<?=$year?>'>
			</field>

			<field>
				<label>Album Cover</label>
				<input type="file" accept="image/*" name="picture" required="required">
			</field>

			<button type="submit" name="add">Add Song</button>
		</form>

	</div>
</section>