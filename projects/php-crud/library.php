<?php include("playlist-data.php"); ?>

<section class="library">
	<div class="inner-column">

		<h1 class="loud-voice">Your Playlists</h1>

		<ul class="list">
			<?php foreach ($libraryData as $library) { ?>
				
				<li>
					<a href="?page=your-playlists&id=<?=$library['id']?>">
					<h2><?=$library["title"]?></h2>
					</a>
				</li>

			<?php } ?>				
		</ul>

	</div>
</section>