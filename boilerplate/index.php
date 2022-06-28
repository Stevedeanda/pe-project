
<!DOCTYPE html>

<?php

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
				if ($page == "my-library") {
					include("my-library.php");
				}
			?>

		</main>

		<footer class="site-footer">			
			<div class="inner-column">

				Footer

			</div>
		</footer>

	</body>

</html>
   