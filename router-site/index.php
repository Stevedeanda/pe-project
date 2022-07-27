
<style>
	section {
		border: 1px solid red;
	}
</style>

<?php include('functions.php'); ?>

<header class="site-header">
	<p>?<?=queryString();?></p>

	<?php include('templates/components/site-menu.php') ?>
</header>

<?php renderPageTemplate( currentPage() ); ?>





