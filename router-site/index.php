
<?php include('functions.php'); ?>


<header>
	<p>?<?=queryString();?></p>
	<h1><?=$page["title"]?></h1>
	<p><?=$page["title"]?></p>

	<?php include('partials/site-menu.php') ?>
</header>

<?php getPageTemplate(currentPage()); ?>

<section>
	<h2>Section Heading</h2>
</section>



