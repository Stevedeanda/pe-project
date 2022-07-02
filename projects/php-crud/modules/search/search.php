<?php include("data/playlist-data.php"); ?>



<section class="playlist">
	<div class="inner-column">

		<h1 class="loud-voice">Playlists for You</h1>

		<ul class="list">
			<?php foreach ($playlistData as $playlist) { ?>
				
				<li class="card">
					<a href="?page=playlists&id=<?=$playlist['id']?>">
					<h2 class="loud-voice"><?=$playlist["title"]?></h2>
					</a>
				</li>

			<?php } ?>				
		</ul>

	</div>
</section>

<section class="genre">	
	<div class="inner-column">

		<h1 class="loud-voice">Genres</h1>

		<ul class="list">
			<?php foreach ($genresData as $genres) { ?>

				<li class="card">
					<a href="?page=genres&id=<?=$genres['id']?>">
						<h2 class="loud-voice"><?=$genres["title"]?></h2>
					</a>
				</li>

			<?php } ?>
		</ul>

	</div>
</section>

<section class="decade">	
	<div class="inner-column">

		<h1 class="loud-voice">Decades</h1>

		<ul class="list">
			<?php foreach ($decadesData as $decades) { ?>

				<li class="card">
					<a href="?page=decades&id=<?=$decades['id']?>">
						<h2 class="loud-voice"><?=$decades["title"]?></h2>
					</a>
				</li>

			<?php } ?>
			
		</ul>

	</div>
</section>