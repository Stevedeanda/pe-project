
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

	<body class="<?=$page?>">

		<?php include("modules/header/header.php"); ?>

		<main class="page-content">


			<?php
				if ($page == "home") {
					include("modules/home/home.php");
				}
				if ($page == "search") {
					include("modules/search/search.php");
				}
				if ($page == "library") {
					include("modules/library/library.php");
				}
				if ($page == "create") {
					include("modules/form/create.php");
				}
				if ($page == "playlists") {
					include("modules/search/detail/playlists/playlists.php");
				}
				if ($page == "genres") {
					include("modules/search/detail/genres/genres.php");
				}
				if ($page == "decades") {
					include("modules/search/detail/decades/decades.php");
				}
				if ($page == "your-library") {
					include("modules/library/detail/your-library/your-library.php");
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
   