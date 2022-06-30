

<?php 

$playlistData = [
	[
		"id" => 1,
		"title" => "Workout",
		"songs" => [9,2,16],
		"picture" => "", 
	],
	[
		"id" => 2,
		"title" => "Summer Vibes",
		"songs" => [3, 12, 10],
		"picture" => "",
	],
	[
		"id" => 3,
		"title" => "Classics",
		"songs" => [3, 12, 10],
		"picture" => "",
	],
];

?>

<!DOCTYPE html>

<?php

// show errors

function showErrors() {
  error_reporting(E_ALL);
  ini_set('display_errors', '1');
}

showErrors();

$page = null;

if (isset($_GET["page"])) {
	$page = $_GET["page"];
} else {
	$page = "home";
}

?>

<html>

	<head>

		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<meta name="description" content="[[insert description]]">
		<meta property="og:image" content="images/default-meta.png">
		<meta property="og:title" content="[[add meta title description">

		<link rel="stylesheet" href="css/style.css">

		<title>PHP CRUD Simple</title>

	</head>

	<body>

		<header class="site-header">

			<div class="inner-column">

				<h1 class="hello">Music Service</h1>

				<nav class="site-menu">
					<a href="?page=home">Home</a>
					<a href="?page=search">Search</a>
				</nav>

			</div>
		</header>

		<main class="page-content">


			<?php

				if ($page == "home") { ?>
					<section class="welcome">
						<div class="inner-column">

							<h1 class="loud-voice">Welcome</h1>

						</div>
					</section>

			<?php } ?>

			<?php
				
				if ($page == "search") { ?>
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
			<?php } ?>

			<?php
				
				if ($page == "playlists") { ?>
					<?php

						//Initialize any variable we know we will need to use
						$currentPlaylist = null;

						print_r($_GET);
						//See if their is any user input

						//Look at each playlist
						foreach ($playlistData as $playlist) {
							//if its the right playlist get it
							if ($playlist["id"] == $_GET["id"]){
								//This new variable is getting the data from the id it matched
								$currentPlaylist = $playlist;								
							}
						}

					?>
					<section class="playlists">
						<div class="inner-column">

							<h1 class="loud-voice"><?=$currentPlaylist["title"]?></h1>

							<p>Playlist items go here</p>

						</div>
					</section>
				<?php } ?>
		</main>

	</body>

</html>
   