<?php

	if (isset($_POST["add"])) {
		echo "added";
	}

?> 

<section class="playlists">
	<div class="inner-column">

		<h1 class="loud-voice">Create</h1>

		<form method="POST">
			<field>
				<label>Song</label>
				<input type="text" name="Song">
			</field>

			<field>
				<label>Album</label>
				<input type="text" name="Album">
			</field>

			<field>
				<label>Artist</label>
				<input type="text" name="Artist">
			</field>

			<field>
				<label>Genre</label>
				<div class="checkbox">
					<input type="checkbox" id="Rock" name="Genre" value="Rock">
					<label for="Rock">Rock</label>
				</div>
				<div class="checkbox">
					<input type="checkbox" id="Hip-Hop" name="Genre" value="Hip-Hop">
					<label for="Hip-Hop">Hip-Hop</label>
				</div>
				<div class="checkbox">
					<input type="checkbox" id="EDM" name="Genre" value="EDM">
					<label for="EDM">EDM</label>
				</div>
				<div class="checkbox">
					<input type="checkbox" id="Latin" name="Genre" value="Latin">
					<label for="Latin">Latin</label>
				</div>
				<div class="checkbox">
					<input type="checkbox" id="Pop" name="Genre" value="Pop">
					<label for="Pop">Pop</label>
				</div>
				<div class="checkbox">
					<input type="checkbox" id="Other" name="Genre" value="Other">
					<label for="Other">Other</label>
				</div>
			</field>

			<field>
				<label>Year of Song/Album</label>
				<input type="number" min="1970" max="2022" name="Year">
			</field>

			<field>
				<label>Album Cover</label>
				<input type="" name="">
			</field>

			<button type="submit" name="add">Add Song</button>
		</form>

	</div>
</section>