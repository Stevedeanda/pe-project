
<?php include ('data/categories.php'); ?>


	<category-grid>
		<ul class='category-list'>

			<?php foreach ($categories as $category) { ?>
				<li class="category">

					<?php
						$title = $category['title'];
						$thumbnail = $category['thumbnail'];
					?>

					<category class='category-card'>
						<a class='categories' href='#'>
							<picture>
								<img src='<?=$thumbnail?>' alt='$todo'>
							</picture>

							<shop>
								<h1 class='attention-voice'>Shop</h1>
							</shop>

							<p class='attention-voice'><?=$title?></p>
						</a>
					</category>

				</li>
			<?php } ?>

		</ul>
	</category-grid>
