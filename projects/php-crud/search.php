<?php include("playlist-data.php"); ?>


<section class="listen-now">
	<div class="inner-column">

		<h1 class="loud-voice">Playlists</h1>

		<ul class="list">
			<?php foreach ($playlistData as $playlist) { ?>
				
				<li>
					<a href="?page=detail&id=<?=$playlist['id']?>">
					<h2><?=$playlist["title"]?></h2>
					</a>
				</li>

			<?php } ?>				
		</ul>

	</div>
</section>

<!-- <section class="genres">	
	<div class="inner-column">

		<h1 class="loud-voice">Genres</h1>

	</div>
</section>

<section class="decades">	
	<div class="inner-column">

		<h1 class="loud-voice">Decades</h1>

	</div>
</section> -->