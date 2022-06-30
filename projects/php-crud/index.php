
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

	<?php include("head.php"); ?>

	<body>

		<?php include("header.php"); ?>

		<main class="page-content">


			<?php
				if ($page == "home") {
					include("home.php");
				}
				if ($page == "search") {
					include("search.php");
				}
				if ($page == "library") {
					include("library.php");
				}
				if ($page == "playlists") {
					include("playlists.php");
				}
				if ($page == "genres") {
					include("genres.php");
				}
				if ($page == "decades") {
					include("decades.php");
				}
				if ($page == "your-playlists") {
					include("your-playlists.php");
				}
				if ($page == "create") {
					include("create.php");
				}
			?>

		</main>

		<!-- <footer class="site-footer">			
			<div class="inner-column">

				Footer

			</div>
		</footer> -->

	</body>

</html>
   