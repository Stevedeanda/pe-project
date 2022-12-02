

<?php

$json = file_get_contents('music.json');
$musicData = json_decode($json, true);




?>

<section>
	<music-added>
		<?php foreach ($musicData as $music) { 
			$music['song'] = $music['song'] ?? "Song title goes here";
			$music['album'] = $music['album'] ?? "Album title goes here";
			$music['artist'] = $music['artist'] ?? "Artist name goes here";
			$music['genre'] = $music['genre'] ?? "Genre goes here";
			$music['year'] = $music['year'] ?? "Year goes here"; ?>
			<article>
				<p class="bold-voice">song: <?=$music['song']?></p>
				<p class="regular-voice">artist: <?=$music['artist']?></p>
				<p class="regular-voice">album: <?=$music['album']?></p>
				<p class="regular-voice">genre: <?=$music['genre']?></p>
				<p class="regular-voice">year: <?=$music['year']?></p>		
			</article>
			
		<?php } ?>
	</music-added>
</section>

