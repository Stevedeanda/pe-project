<?php include("data/playlist-data.php"); ?>

<section class="library">
	<div class="inner-column">

		<h1 class="loud-voice">Your Library</h1>

		<ul class="list">
			<?php foreach ($libraryData as $library) { ?>
				
				<li>
					<a href="?page=your-library&id=<?=$library['id']?>">
					<h2><?=$library["title"]?></h2>
					</a>
				</li>

			<?php } ?>				
		</ul>

	</div>
</section>