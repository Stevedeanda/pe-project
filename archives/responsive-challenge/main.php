


<main class="page-content">

	<section class="welcome">
		<div class="inner-column">

			<masthead>
				<picture>
					<img src="https://www.fillmurray.com/200/200">
				</picture>

				<welcome>
					<h1>Hello! This is a 'diptych'</h1>
					<p>You can call it whatever you want. It's a
						module that has an image and some
						supporting text. On the smaller screen it
						works nicely to stack. On a larger
						screen, it fits side by side.</p>
				</welcome>

			</masthead>

		</div>
	</section>

	<section class="module-one">	
		<div class="inner-column">

			<call-to-action-module>

				<h1>This module is a "call to action"</h1>

				<p>These aren't names you should memorize.
					We're just making them up. Sometimes
					things get called something so many times
					that it sticks. This is a pretty common
					pattern</p>

				<a href="#">Here's the action!</a>

			</call-to-action-module>

		</div>
	</section>

	<section class="module-two">	
		<div class="inner-column">

			<article-grid>

				<h1>This is and "Article grid"
					module. This is its
					heading.</h1>

				<p>Again, we totally just made that up. It's a
					box with boxes in it.</p>

			</article-grid>

			<article-card>

				<ul>

					<?php

					$json = file_get_contents("articles.json");
					$article_data= json_decode($json, true);
					$articles = $article_data["article"];

					$title = $article["title"];
					$paragraph = $article["paragraph"];
					$link = $article["link"];

					foreach ($articles as $article) { ?>						

						<li>
							
							<p><?=$title?></p>
							
						</li>


					<?php } ?>

				</ul>


			</article-card>

		</div>
	</section>

	<section class="module-one">	
		<div class="inner-column">

			<call-to-action-module>

				<h1>This module is a "call to action"</h1>

				<p>These aren't names you should memorize.
					We're just making them up. Sometimes
					things get called something so many times
					that it sticks. This is a pretty common
					pattern</p>

				<a href="#">Here's the action!</a>

			</call-to-action-module>

		</div>
	</section>

</main>