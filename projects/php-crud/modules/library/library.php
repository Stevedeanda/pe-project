

<?php

$json = file_get_contents('music.json');
$musicData = json_decode($json, true);

//var_dump(count($musicData));

$keys = array_keys($musicData);

$ids = array_column($musicData, 'id');
print_r($ids);

ARRAY_FILTER_USE_KEY($musicData);

//print_r (count($musicData));

//print_r($keys);
//print_r(key($musicData));

for ($i = 0; $musicData < count($musicData); $i++) {
   print_r($musicData[$i]);
}

//print_r(array_values($musicData));
if (isset($_POST["delete"]) ) {
	for ($i = 0; $musicData < count($musicData); $i++) {
      print_r($musicData[$i]);
   }
}

function Exists($index, $array)
{
  if (array_key_exists($index, $array))
  {
      echo "Found the Key";
  }
  else
  {
      echo "Key not Found";
  }
}
$array = array(
  "ram" => 25,
  "krishna" => 10,
  "aakash" => 20,
  "gaurav"
);
$index = "24";
//print_r(Exists($index, $musicData));


?>

<section>
	<h1>Added songs</h1>
	<music-added>
		<?php foreach ($musicData as $music) { 
			$music['song'] = $music['song'] ?? "Song title goes here";
			$music['album'] = $music['album'] ?? "Album title goes here";
			$music['artist'] = $music['artist'] ?? "Artist name goes here";
			$music['genre'] = $music['genre'] ?? "Genre goes here";
			$music['year'] = $music['year'] ?? "Year goes here"; 

			//print_r(array_keys($music));
			//print_r(key($musicData));?>
			<form method="POST">
				<p class="bold-voice">song: <?=$music['song']?></p>
				<p class="regular-voice">artist: <?=$music['artist']?></p>
				<p class="regular-voice">album: <?=$music['album']?></p>
				<p class="regular-voice">genre: <?=$music['genre']?></p>
				<p class="regular-voice">year: <?=$music['year']?></p>
				<button type="submit" name="delete" >remove</button>		
			</form>
			
		<?php } ?>

	</music-added>
</section>

