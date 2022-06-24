
<?php include ('data/articles.php'); ?>

<articles-intro>
	<header class='card-heading'>
		<h2 class='attention-voice'>Check out these stories</h2>

		<p>We want to push people to be more active in helping reduce waste. We show case stories of people doing that and our efforts as a company as well.</p>
	</header>

	<article-grid>
		<ul class='article-list'>

			<?php foreach ($articles as $article) { ?>
				<li class='article'>
					<?php include('modules/article-card/template.php'); ?>
				</li>
			<?php } ?>

		</ul>
	</article-grid>
</articles-intro>
