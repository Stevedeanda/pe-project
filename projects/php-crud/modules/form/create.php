<?php

	$json = file_get_contents('music.json');
	$musicData = json_decode($json, true);


	//var_dump($json);

	
	$song = "";
	$album = "";
	$artist = "";
	$genre = "";
	$year = "";

	$addSong = false;
	$addAlbum = false;
	$addArtist = false;
	$addYear = false;

	$songError = false;
	$albumError = false;
	$artistError = false;
	$yearError = false;

	$newMusic = "";

	$musicAdded = null;
	$songAdded = null;
	$artistAdded = null;
	$albumAdded = null;
	$genreAdded = null;
	$yearAdded = null;

	$id = uniqid("a");

	

	if ( isset($_POST["add"]) ) {
		
		if ( isset($_POST["song"]) ) {
			$song = $_POST["song"];
			if (strlen($song) > 0 ) {
				$addSong = true;
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
			} else {
				$yearError = "Please add the year song was created.";
			}
		}

		if ($addSong && $addAlbum && $addArtist && $addYear) {

			//Get old data first
			$json = file_get_contents('music.json');
			$musicData = json_decode($json, true);


			// Create new music data list
			$newMusic = [
				
				'id' => $id,
				'song' => $song,
				'album' => $album,
				'artist' => $artist,
				'genre' => $genre,
				'year' => $year,
			
			];

			var_dump($newMusic);
			//print($newMusic['song']);

			// add new music to old music
			array_push($musicData, $newMusic);

			//transform it to JSON file
			$musicJson = json_encode($musicData);

			//Save json
			file_put_contents('music.json', $musicJson);

			// Display the song that was added
			$musicAdded = "Added song - check the library for a complete list of added songs.";
			$songAdded = "song: " . $song;
			$artistAdded = "artist: " . $artist;
			$albumAdded = "album: " . $album;
			$genreAdded = "genre: " . $genre;
			$yearAdded = "year: " . $year;

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
					<input type="radio" id="Rock" name="genre" value="Rock" >
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
				<?php if ($yearError) { ?>
					<p class="error"><?=$yearError?></p>
				<?php } ?>
			</field>

			<button type="submit" name="add">Add Song</button>

		</form>

		<p><?=$musicAdded?></p>
		<p><?=$songAdded?></p>
		<p><?=$artistAdded?></p>
		<p><?=$albumAdded?></p>
		<p><?=$genreAdded?></p>
		<p><?=$yearAdded?></p>

	</div>
</section>





