<?php

	if (isset($_POST["add"])) {
		echo "added";
	}

?> 

<section class="form">
	<div class="inner-column">

		<h1 class="loud-voice">Add a Song</h1>

		<form method="POST">
			<field>
				<label>Song</label>
				<input type="text" name="Song" required="required">
			</field>

			<field>
				<label>Album</label>
				<input type="text" name="Album" required="required">
			</field>

			<field>
				<label>Artist</label>
				<input type="text" name="Artist" required="required">
			</field>

			<field>
				<p>Please select the Genre for this song</p>
				<div class="radio">
					<input type="radio" id="Rock" name="Genre" value="Rock">
					<label for="Rock">Rock</label>
				</div>
				<div class="radio">
					<input type="radio" id="Hip-Hop" name="Genre" value="Hip-Hop">
					<label for="Hip-Hop">Hip-Hop</label>
				</div>
				<div class="radio">
					<input type="radio" id="EDM" name="Genre" value="EDM">
					<label for="EDM">EDM</label>
				</div>
				<div class="radio">
					<input type="radio" id="Latin" name="Genre" value="Latin">
					<label for="Latin">Latin</label>
				</div>
				<div class="radio">
					<input type="radio" id="Pop" name="Genre" value="Pop">
					<label for="Pop">Pop</label>
				</div>
				<div class="radio">
					<input type="radio" id="Other" name="Genre" value="Other">
					<label for="Other">Other</label>
				</div>
			</field>

			<field>
				<label>Year of Song/Album</label>
				<input type="number" min="1970" max="2022" name="Year" required="required">
			</field>

			<field>
				<label>Album Cover</label>
				<input type="file" accept="image/*" name="picture">
			</field>

			<button type="submit" name="add">Add Song</button>
		</form>

	</div>
</section>