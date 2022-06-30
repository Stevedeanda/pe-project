<?php include("playlist-data.php"); ?>
<?php include("song-data.php"); ?>


<section class="playlists">
	<div class="inner-column">

		<h1 class="loud-voice">Playlists for You</h1>

		<ul class="list">
			<?php foreach ($playlistData as $playlist) { ?>
				
				<li>
					<a href="?page=playlists&id=<?=$playlist['id']?>">
					<h2><?=$playlist["title"]?></h2>
					</a>
				</li>

			<?php } ?>				
		</ul>

	</div>
</section>

<section class="genres">	
	<div class="inner-column">

		<h1 class="loud-voice">Genres</h1>

		<ul class="list">
			<?php foreach ($genresData as $genres) { ?>

				<li>
					<a href="?page=genres&id=<?=$genres['id']?>">
						<h2><?=$genres["title"]?></h2>
					</a>
				</li>

			<?php } ?>
		</ul>

	</div>
</section>

<section class="decades">	
	<div class="inner-column">

		<h1 class="loud-voice">Decades</h1>

		<ul class="list">
			<?php foreach ($decadesData as $decades) { ?>

				<li>
					<a href="?page=decades&id=<?=$decades['id']?>">
						<h2><?=$decades["title"]?></h2>
					</a>
				</li>

			<?php } ?>
			
		</ul>

	</div>
</section>