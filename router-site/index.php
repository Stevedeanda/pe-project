
<?php include('functions.php'); ?>

<?php
	$page = currentPage();

	$dataPath = "data/pages/$page.json";

	//echo $dataPath;

	$json = file_get_contents($dataPath);
	$pageData = json_decode($json, true);

	//echo $pageData['title'];
?>




<header>
	<p>?<?=queryString();?></p>
	<h1><?=$pageData["title"]?></h1>
	<p><?=$pageData["intro"]?></p>

	<?php include('partials/site-menu.php') ?>
</header>

<?php getPageTemplate(currentPage()); ?>

<section>

	<?php

		$sections = $pageData['sections'];
		foreach ($sections as $section) { 

		$heading = $section['heading'];?>

			<h2><?=$heading?></h2>

	<?php } ?>
	

</section>



